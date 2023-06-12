import Swal from 'sweetalert2'
import withReactContent from 'sweetalert2-react-content'

export const MySwal = withReactContent(Swal)

export const SweetAlert = (title, text, icon) => {
    MySwal.fire({
        icon: icon,
        title: title,
        html: '<span class="capitalize">' + text + '</span>',
    })
}