<template>
    <div>
       <div class="content">
			<div class="container-fluid">
				
				<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
				<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
					<p class="_title0">Tags <Button @click="addModal=true" v-if="isWritePermitted"><Icon type="md-add" /> Add tag</Button></p>

					<div class="_overflow _table_div">
						<table class="_table">
								<!-- TABLE TITLE -->
							<tr>
								<th>ID</th>
								<th>Name</th>
							    <th>Email</th>
							    <th>Message</th>
								<th>Created at</th>
								<th>Action</th>
							</tr>
								<!-- TABLE TITLE -->


								<!-- ITEMS -->
							<tr v-for="(contact, i) in contacts" :key="i" v-if="contacts.length">
								<td>{{contact.id}}</td>
								<td >{{contact.name}}</td>
								<td>{{contact.email}}</td>
								<td >{{contact.message}}</td>
								<td>{{contact.created_at}}</td>
								<td>
							
									<Button type="error" size="small" @click="showDeletingModal(contact, i)"  :loading="contact.isDeleting" v-if="isDeletePermitted">Delete</Button>
								</td>
							</tr>
								<!-- ITEMS -->
					</table>
					</div>
				</div>


			
				<deleteModal></deleteModal>

			</div>
		</div>
    </div>
</template>


<script>
import deleteModal from '../components/deleteModal.vue'
import { mapGetters } from 'vuex'
export default {
	data(){
		return {
			data : {
				name: '',
			
			}, 
			addModal : false, 
			editModal : false, 
			isAdding : false, 
			contacts : [], 
			editData : {
				name: '',
			
			}, 
			index : -1, 
			showDeleteModal: false, 
			isDeleing : false,
			deleteItem: {}, 
			deletingIndex: -1, 
			websiteSettings: []
		}
	},
	methods : {
		async addContact(){
			if(this.data.tagName.trim()=='') return this.e('Tag name is required')
			const res = await this.callApi('post', 'app/create_tag', this.data)
			if(res.status===201){
				this.tags.unshift(res.data)
				this.s('Tag has been added successfully!')
				this.addModal = false
				this.data.tagName = ''
			}else{
				if(res.status==422){
					if(res.data.errors.tagName){
						this.e(res.data.errors.tagName[0])
					}
					
				}else{
					this.swr()
				}
				
			}
		},
		async editTag(){
			if(this.editData.tagName.trim()=='') return this.e('Tag name is required')
			const res = await this.callApi('post', 'app/edit_tag', this.editData)
			if(res.status===200){
				this.tags[this.index].tagName = this.editData.tagName
				this.s('Tag has been edited successfully!')
				this.editModal = false
				
			}else{
				if(res.status==422){
					if(res.data.errors.tagName){
						this.e(res.data.errors.tagName[0])
					}
					
				}else{
					this.swr()
				}
				
			}
		},
		showEditModal(contact, index){
			let obj = {
				id : contact.id,
				name: contact.name,
				email: contact.email, 
				message: contact.message,  
				
			}
			this.editData = obj
			this.editModal = true
			this.index = index
		}, 
		async deleteContact(){
			this.isDeleing = true
			const res = await this.callApi('post', 'app/delete_contact', this.deleteItem)
			if(res.status===200){
				this.contacts.splice(this.deletingIndex,1)
				this.s('Contact has been deleted successfully!')
			}else{
				this.swr()
			}
			this.isDeleing = false
			this.showDeleteModal = false
		}, 
		showDeletingModal(contact, i){
			const deleteModalObj  =  {
				showDeleteModal: true, 
				deleteUrl : 'app/delete_contact', 
				data : contact, 
				deletingIndex: i, 
				isDeleted : false,
			}
			this.$store.commit('setDeletingModalObj', deleteModalObj)
			console.log('delete method called')
			// this.deleteItem = tag
			// this.deletingIndex = i
			// this.showDeleteModal = true
		}
	}, 
	async created(){
		const res = await this.callApi('get', 'app/get_contacts')
		if(res.status==200){
			this.contacts = res.data
		}else{
			this.swr()
		}
	}, 
	components : {
		deleteModal
	}, 
	computed : {
		...mapGetters(['getDeleteModalObj'])
	},
	watch : {
		getDeleteModalObj(obj){
			if(obj.isDeleted){
				this.contacts.splice(obj.deletingIndex,1)
			}
		}
	}
	
	
}
</script>