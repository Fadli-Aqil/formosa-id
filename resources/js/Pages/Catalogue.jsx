import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { SweetAlert, MySwal } from '@/lib/sweetalert';
import { useState, Fragment } from 'react'
import { Tab, Dialog, Transition } from '@headlessui/react'
import { Head } from '@inertiajs/react';
import { TabPanel, TabList } from '@/Components/TabPanel';
import { useForm, router } from '@inertiajs/react'

function classNames(...classes) {
    return classes.filter(Boolean).join(' ')
}

export default function Catalogue({ auth, tapioca, sauce, jelly, syrup, other }) {
    const [isShow, setShow] = useState(false)
    const [isEdit, setEdit] = useState(false)
    const [isAdd, setAdd] = useState(false)
    const [isResponse, setResponse] = useState()
    const { data: isSelected, setData: setSelected, post, patch, delete: destroy, processing, errors, reset } = useForm({
        target1: '',
        target2: '',
        folder: '',
        categories: '',
        flavour: '',
        description: '',
        size: '',
        bpom: '',
        halal: ''
    })

    const resetField = () => {
        setSelected('target1', null)
        setSelected('target2', null)
        setSelected('folder', null)
        setSelected('categories', null)
        setSelected('flavour', null)
        setSelected('description', null)
        setSelected('size', null)
        setSelected('bpom', null)
        setSelected('halal', null)
    }

    const closeAdd = () => {
        setAdd(false)
        resetField
        setResponse('')
    }

    const openAdd = () => {
        resetField
        setAdd(true)
    }

    const closeEdit = () => {
        setEdit(false)
        setResponse('')
        openModal()
    }

    const openEdit = () => {
        setEdit(true)
        closeModal()
    }

    const closeModal = () => {
        setShow(false)
        resetField
        setResponse('')
    }

    const openModal = () => {
        setShow(true)
    }

    const addNew = (e) => {
        e.preventDefault()
        MySwal.fire({
            title: 'Are you sure?',
            text: "Is the data filled in correct? The data that has been input cannot be changed",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, sure!'
        }).then((result) => {
            if (result.isConfirmed) {
                post('/fif-admin/catalogue', {
                    forceFormData: true,
                    preserveScroll: true,
                    onSuccess: (e) => {
                        setResponse(e.props.response)
                        if (e.props.response.status) {
                            MySwal.fire(
                                'Success',
                                'Data added successfully',
                                'success'
                            )
                            closeAdd()
                            router.reload()
                        } else {
                            setTimeout(() => {
                                router.reload()
                            }, 500);
                        }
                    },
                })
            }
        })
    }

    const hapus = (e) => {
        e.preventDefault()
        MySwal.fire({
            title: 'Are you sure?',
            text: "Deleted files cannot be recovered",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                destroy('/fif-admin/catalogue', {
                    preserveScroll: true,
                    onSuccess: (e) => {
                        setResponse(e.props.response)
                        MySwal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                            closeModal()
                            router.reload()
                    },
                })
            }
        })

    }


    const Show = (folder, file, categories, flavour, description, size, bpom, halal, target1, target2) => {
        openModal()
        setSelected({
            target1: target1,
            target2: target2,
            file: file,
            folder: folder,
            categories: categories,
            flavour: flavour,
            description: description,
            size: size,
            bpom: bpom,
            halal: halal
        })
    }

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Catalogue</h2>}
        >
            <Head title="Catalogue" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                        <Tab.Group>
                            <Tab.List className="flex space-x-1 rounded-xl bg-gray-900/10 p-1">
                                <TabPanel>Tapioca Pearls</TabPanel>
                                <TabPanel>Sauce</TabPanel>
                                <TabPanel>Jelly</TabPanel>
                                <TabPanel>Syrup</TabPanel>
                                <TabPanel>Other</TabPanel>
                            </Tab.List>
                            <Tab.Panels className="mt-2">
                                <Tab.Panel
                                    className={classNames(
                                        'rounded-xl bg-white p-3',
                                        'ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none'
                                    )}
                                >
                                    <button onClick={() => { openAdd(), setSelected('categories', 'tapioca pearls') }} className='outline-none flex w-full text-white justify-center bg-green-500 hover:bg-green-600 rounded-md p-3 mb-3 cursor-pointer'>
                                        Add New
                                    </button>
                                    {tapioca?.length > 0 ? (
                                        <ul className='md:max-h-[34rem] max-h-[30rem] overflow-y-auto'>
                                            {tapioca?.map((data, i) =>
                                                <TabList key={i} show={Show} folder="tapioca_pearls" file={data.folder} categories={data.categories} flavour={data.flavour} size={data.size} bpom={data.bpom} halal={data.halal} description={data.description} />
                                            )}
                                        </ul>

                                    ) : (
                                        <>
                                            No Data Here
                                        </>
                                    )}
                                </Tab.Panel>
                                <Tab.Panel
                                    className={classNames(
                                        'rounded-xl bg-white p-3',
                                        'ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none'
                                    )}
                                >
                                    <button onClick={() => { openAdd(), setSelected('categories', 'sauce') }} className='outline-none flex w-full text-white justify-center bg-green-500 hover:bg-green-600 rounded-md p-3 mb-3 cursor-pointer'>
                                        Add New
                                    </button>
                                    {sauce?.length > 0 ? (
                                        <ul className='md:max-h-[34rem] max-h-[30rem] overflow-y-auto'>
                                            {sauce?.map((data, i) =>
                                                <TabList key={i} show={Show} folder="sauce" file={data.folder} categories={data.categories} flavour={data.flavour} size={data.size} bpom={data.bpom} halal={data.halal} description={data.description} />
                                            )}
                                        </ul>
                                    ) : (
                                        <>
                                            No Data Here
                                        </>
                                    )}
                                </Tab.Panel>
                                <Tab.Panel
                                    className={classNames(
                                        'rounded-xl bg-white p-3',
                                        'ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none'
                                    )}
                                >
                                    <button onClick={() => { openAdd(), setSelected('categories', 'jelly') }} className='outline-none flex w-full text-white justify-center bg-green-500 hover:bg-green-600 rounded-md p-3 mb-3 cursor-pointer'>
                                        Add New
                                    </button>
                                    {jelly?.length > 0 ? (
                                        <ul className='md:max-h-[34rem] max-h-[30rem] overflow-y-auto'>
                                            {jelly?.map((data, i) =>
                                                <TabList key={i} show={Show} folder="jelly" file={data.folder} categories={data.categories} flavour={data.flavour} size={data.size} bpom={data.bpom} halal={data.halal} description={data.description} />
                                            )}
                                        </ul>
                                    ) : (
                                        <>
                                            No Data Here
                                        </>
                                    )}
                                </Tab.Panel>
                                <Tab.Panel
                                    className={classNames(
                                        'rounded-xl bg-white p-3',
                                        'ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none'
                                    )}
                                >
                                    <button onClick={() => { openAdd(), setSelected('categories', 'syrup') }} className='outline-none flex w-full text-white justify-center bg-green-500 hover:bg-green-600 rounded-md p-3 mb-3 cursor-pointer'>
                                        Add New
                                    </button>
                                    {syrup?.length > 0 ? (
                                        <ul className='md:max-h-[34rem] max-h-[30rem] overflow-y-auto'>
                                            {syrup?.map((data, i) =>
                                                <TabList key={i} show={Show} folder="syrup" file={data.folder} categories={data.categories} flavour={data.flavour} size={data.size} bpom={data.bpom} halal={data.halal} description={data.description} />
                                            )}
                                        </ul>
                                    ) : (
                                        <>
                                            No Data Here
                                        </>
                                    )}
                                </Tab.Panel>
                                <Tab.Panel
                                    className={classNames(
                                        'rounded-xl bg-white p-3',
                                        'ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none'
                                    )}
                                >
                                    <button onClick={() => { openAdd(), setSelected('categories', 'other') }} className='outline-none flex w-full text-white justify-center bg-green-500 hover:bg-green-600 rounded-md p-3 mb-3 cursor-pointer'>
                                        Add New
                                    </button>
                                    {other?.length > 0 ? (
                                        <ul className='md:max-h-[34rem] max-h-[30rem] overflow-y-auto'>
                                            {other?.map((data, i) =>
                                                <TabList key={i} show={Show} folder="other" file={data.folder} categories={data.categories} flavour={data.flavour} size={data.size} bpom={data.bpom} halal={data.halal} description={data.description} />
                                            )}
                                        </ul>
                                    ) : (
                                        <>
                                            No Data Here
                                        </>
                                    )}
                                </Tab.Panel>
                            </Tab.Panels>
                        </Tab.Group>
                    </div>
                </div>
            </div>
            <Transition appear show={isShow} as={Fragment}>
                <Dialog as="div" className="relative z-10" onClose={closeModal}>
                    <Transition.Child
                        as={Fragment}
                        enter="ease-out duration-300"
                        enterFrom="opacity-0"
                        enterTo="opacity-100"
                        leave="ease-in duration-200"
                        leaveFrom="opacity-100"
                        leaveTo="opacity-0"
                    >
                        <div className="fixed inset-0 bg-black bg-opacity-25" />
                    </Transition.Child>

                    <div className="fixed inset-0 overflow-y-auto">
                        <div className="flex min-h-full items-center justify-center p-4 text-center">
                            <Transition.Child
                                as={Fragment}
                                enter="ease-out duration-300"
                                enterFrom="opacity-0 scale-95"
                                enterTo="opacity-100 scale-100"
                                leave="ease-in duration-200"
                                leaveFrom="opacity-100 scale-100"
                                leaveTo="opacity-0 scale-95"
                            >
                                <Dialog.Panel className="w-full max-w-4xl transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all">
                                    <Dialog.Title
                                        as="h3"
                                        className="text-lg font-medium leading-6 text-gray-900 capitalize"
                                    >
                                        View {isSelected.categories} - {isSelected.flavour}
                                    </Dialog.Title>
                                    <div className="mt-2 grid grid-cols-2 gap-2">
                                        <div className=''>
                                            <img src={'../assets/img/catalogue/' + isSelected.folder + '/' + isSelected.file} />
                                        </div>
                                        <div className=''>
                                            <p className='text-ellipsis overflow-hidden'>{isSelected.description}</p>
                                            <div className='mt-4 px-2 py-2 w-full bg-gray-100 rounded-lg border'>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td className='text-gray-700'>Size</td>
                                                            <td className='text-gray-700 px-2 md:px-4'>:</td>
                                                            <td className='text-gray-700'>{isSelected.size}</td>
                                                        </tr>
                                                        <tr>
                                                            <td className='text-gray-700'>BPOM RI</td>
                                                            <td className='text-gray-700 px-2 md:px-4'>:</td>
                                                            <td className='text-gray-700'>{isSelected.bpom}</td>
                                                        </tr>
                                                        <tr>
                                                            <td className='text-gray-700'>Halal</td>
                                                            <td className='text-gray-700 px-2 md:px-4'>:</td>
                                                            <td className='text-gray-700'>{isSelected.halal}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div className="mt-4 flex justify-center gap-2">
                                        <button
                                            type="button"
                                            className="inline-flex justify-center rounded-md border border-transparent bg-red-100 px-4 py-2 text-sm font-medium text-red-900 hover:bg-red-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-red-500 focus-visible:ring-offset-2"
                                            onClick={hapus}
                                        >
                                            Delete
                                        </button>
                                        {/* <button
                                            type="button"
                                            className="inline-flex justify-center rounded-md border border-transparent bg-yellow-100 px-4 py-2 text-sm font-medium text-yellow-900 hover:bg-yellow-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-yellow-500 focus-visible:ring-offset-2"
                                            onClick={openEdit}
                                        >
                                            Edit
                                        </button> */}
                                        <button
                                            type="button"
                                            className="inline-flex justify-center rounded-md border border-transparent bg-blue-100 px-4 py-2 text-sm font-medium text-blue-900 hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2"
                                            onClick={closeModal}
                                        >
                                            Close
                                        </button>
                                    </div>
                                </Dialog.Panel>
                            </Transition.Child>
                        </div>
                    </div>
                </Dialog>
            </Transition>
            <Transition appear show={isEdit} as={Fragment}>
                <Dialog as="div" className="relative z-10" onClose={closeEdit}>
                    <Transition.Child
                        as={Fragment}
                        enter="ease-out duration-300"
                        enterFrom="opacity-0"
                        enterTo="opacity-100"
                        leave="ease-in duration-200"
                        leaveFrom="opacity-100"
                        leaveTo="opacity-0"
                    >
                        <div className="fixed inset-0 bg-black bg-opacity-25" />
                    </Transition.Child>

                    <div className="fixed inset-0 overflow-y-auto">
                        <div className="flex min-h-full items-center justify-center p-4 text-center">
                            <Transition.Child
                                as={Fragment}
                                enter="ease-out duration-300"
                                enterFrom="opacity-0 scale-95"
                                enterTo="opacity-100 scale-100"
                                leave="ease-in duration-200"
                                leaveFrom="opacity-100 scale-100"
                                leaveTo="opacity-0 scale-95"
                            >
                                <Dialog.Panel className="w-full max-w-4xl transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all">
                                    <Dialog.Title
                                        as="h3"
                                        className="text-lg font-medium leading-6 text-gray-900 capitalize"
                                    >
                                        Edit for {isSelected.categories} - {isSelected.flavour}
                                    </Dialog.Title>
                                    <div className="mt-2">
                                        <form>
                                            <div className='mb-3'>
                                                <label>
                                                    Change Image <span className='text-sm text-red-500'>3368px * 3368px</span> <span className='text-xs text-gray-500'>(abaikan jika tidak ingin mengganti gambar)</span>
                                                </label>
                                                <input type='file' accept='image/webp, image/png, image/jpg' className='capitalize w-full focus:outline-none rounded-lg active:outline-none bg-gray-50 active:bg-white border file:py-2 file:cursor-pointer file:border-none file:bg-gray-700 file:mr-2 cursor-pointer file:text-white file:px-4 border-gray-300' />
                                            </div>
                                            <div className='mb-3'>
                                                <label>
                                                    Flavour
                                                </label>
                                                <input type='text' defaultValue={isSelected.flavour} className='capitalize w-full rounded-lg focus:outline-none bg-gray-50 focus:bg-white border-gray-300' />
                                            </div>
                                            <div className='mb-3'>
                                                <label>
                                                    Description
                                                </label>
                                                <textarea type='text' defaultValue={isSelected.description} className='capitalize w-full rounded-lg focus:outline-none bg-gray-50 focus:bg-white border-gray-300 h-32' ></textarea>
                                            </div>
                                            <div className='mb-3'>
                                                <label>
                                                    Size
                                                </label>
                                                <input type='text' defaultValue={isSelected.size} className='capitalize w-full rounded-lg focus:outline-none bg-gray-50 focus:bg-white border-gray-300' />
                                            </div>
                                            <div className='mb-3'>
                                                <label>
                                                    BPOM RI
                                                </label>
                                                <input type='text' defaultValue={isSelected.bpom} className='capitalize w-full rounded-lg focus:outline-none bg-gray-50 focus:bg-white border-gray-300' />
                                            </div>
                                            <div className='mb-3'>
                                                <label>
                                                    Halal
                                                </label>
                                                <input type='text' defaultValue={isSelected.halal} placeholder='none' className='capitalize w-full rounded-lg bg-gray-50 focus:outline-none focus:bg-white border-gray-300' />
                                            </div>
                                        </form>
                                    </div>

                                    <div className="mt-4 flex justify-center gap-2">
                                        <button
                                            type="button"
                                            className="inline-flex justify-center rounded-md border border-transparent bg-gray-100 px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-offset-2"
                                            onClick={closeEdit}
                                        >
                                            Cancel
                                        </button>
                                        <button
                                            type="button"
                                            className="inline-flex justify-center rounded-md border border-transparent bg-green-100 px-4 py-2 text-sm font-medium text-green-900 hover:bg-green-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-green-500 focus-visible:ring-offset-2"
                                            onClick={() => SweetAlert('Updated', isSelected.categories + ' - ' + isSelected.flavour + ' has updated!', 'success')}
                                        >
                                            Save
                                        </button>
                                    </div>
                                </Dialog.Panel>
                            </Transition.Child>
                        </div>
                    </div>
                </Dialog>
            </Transition>
            <Transition appear show={isAdd} as={Fragment}>
                <Dialog as="div" className="relative z-10" onClose={closeAdd}>
                    <Transition.Child
                        as={Fragment}
                        enter="ease-out duration-300"
                        enterFrom="opacity-0"
                        enterTo="opacity-100"
                        leave="ease-in duration-200"
                        leaveFrom="opacity-100"
                        leaveTo="opacity-0"
                    >
                        <div className="fixed inset-0 bg-black bg-opacity-25" />
                    </Transition.Child>

                    <div className="fixed inset-0 overflow-y-auto">
                        <div className="flex min-h-full items-center justify-center p-4 text-center">
                            <Transition.Child
                                as={Fragment}
                                enter="ease-out duration-300"
                                enterFrom="opacity-0 scale-95"
                                enterTo="opacity-100 scale-100"
                                leave="ease-in duration-200"
                                leaveFrom="opacity-100 scale-100"
                                leaveTo="opacity-0 scale-95"
                            >
                                <Dialog.Panel className="w-full max-w-4xl transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all">
                                    <Dialog.Title
                                        as="h3"
                                        className="text-lg font-medium leading-6 text-gray-900 capitalize"
                                    >
                                        Add new {isSelected.categories}
                                    </Dialog.Title>
                                    {
                                        isResponse && (
                                            <div className={`w-full px-4 py-2 rounded-lg border ${isResponse?.status ? "bg-green-200 border-green-600 text-green-600" : "bg-red-200 border-red-600 text-red-600"} `}>{isResponse?.message}</div>
                                        )
                                    }
                                    <form onSubmit={addNew}>
                                        <div className="mt-2">
                                            <div className='mb-3'>
                                                <label>
                                                    Change Image <span className='text-sm text-red-500'>3368px * 3368px</span> <span className='text-xs text-red-500'>(required)</span>
                                                </label>
                                                <input onChange={e => setSelected('folder', e.target.files[0])} type='file' accept='image/webp, image/png, image/jpg' className='w-full focus:outline-none rounded-lg active:outline-none bg-gray-50 active:bg-white border file:py-2 file:cursor-pointer file:border-none file:bg-gray-700 file:mr-2 cursor-pointer file:text-white file:px-4 border-gray-300' />
                                            </div>
                                            <div className='mb-3'>
                                                <label>
                                                    Flavour <span className='text-xs text-red-500'>(required)</span>
                                                </label>
                                                <input onChange={e => setSelected('flavour', e.target.value)} placeholder='Type the flavour here' type='text' className='placeholder:normal-case capitalize w-full rounded-lg focus:outline-none bg-gray-50 focus:bg-white border-gray-300' />
                                            </div>
                                            <div className='mb-3'>
                                                <label>
                                                    Description <span className='text-xs text-red-500'>(required)</span>
                                                </label>
                                                <textarea onChange={e => setSelected('description', e.target.value)} placeholder='Type the description here' type='text' className='placeholder:normal-case capitalize w-full rounded-lg focus:outline-none bg-gray-50 focus:bg-white border-gray-300 h-32' ></textarea>
                                            </div>
                                            <div className='mb-3'>
                                                <label>
                                                    Size <span className='text-xs text-red-500'>(required)</span>
                                                </label>
                                                <input onChange={e => setSelected('size', e.target.value)} placeholder='Type the size here' type='text' className='placeholder:normal-case capitalize w-full rounded-lg focus:outline-none bg-gray-50 focus:bg-white border-gray-300' />
                                            </div>
                                            <div className='mb-3'>
                                                <label>
                                                    BPOM RI <span className='text-xs text-red-500'>(required)</span>
                                                </label>
                                                <input onChange={e => setSelected('bpom', e.target.value)} placeholder='Type the BPOM here' type='text' className='placeholder:normal-case capitalize w-full rounded-lg focus:outline-none bg-gray-50 focus:bg-white border-gray-300' />
                                            </div>
                                            <div className='mb-3'>
                                                <label>
                                                    Halal <span className='text-xs text-red-500'>(required)</span>
                                                </label>
                                                <input onChange={e => setSelected('halal', e.target.value)} type='text' placeholder='Type the halal here' className='placeholder:normal-case capitalize w-full rounded-lg bg-gray-50 focus:outline-none focus:bg-white border-gray-300' />
                                            </div>
                                        </div>

                                        <div className="mt-4 flex justify-center gap-2">
                                            <button
                                                type="reset"
                                                className="inline-flex justify-center rounded-md border border-transparent bg-gray-100 px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-offset-2"
                                                onClick={closeAdd}
                                            >
                                                Cancel
                                            </button>
                                            <button
                                                type="submit"
                                                className="inline-flex justify-center rounded-md border border-transparent bg-green-100 px-4 py-2 text-sm font-medium text-green-900 hover:bg-green-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-green-500 focus-visible:ring-offset-2"
                                            >
                                                Save
                                            </button>
                                        </div>
                                    </form>
                                </Dialog.Panel>
                            </Transition.Child>
                        </div>
                    </div>
                </Dialog>
            </Transition>
        </AuthenticatedLayout>
    );
}
