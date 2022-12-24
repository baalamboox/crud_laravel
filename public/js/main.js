const modal = document.querySelector('#exampleModal')
const nameContact = document.querySelector('#name_contact')
const surnameContact = document.querySelector('#surname_contact')
const phoneContact = document.querySelector('#phone_contact')
const emailContact = document.querySelector('#email_contact')
const formUpdate = document.querySelector('#form_update')
const modalUpdate = new bootstrap.Modal(modal)
document.querySelectorAll('#btn_edit').forEach((current) => {
    current.addEventListener('click', (evt) => {
        formUpdate.setAttribute('action', `/update/${evt.path[3].cells[0].innerHTML}`)
        nameContact.value = evt.path[3].cells[1].innerHTML
        surnameContact.value = evt.path[3].cells[2].innerHTML
        phoneContact.value = evt.path[3].cells[3].innerHTML
        emailContact.value = evt.path[3].cells[4].innerHTML
        modalUpdate.show()
    })
})