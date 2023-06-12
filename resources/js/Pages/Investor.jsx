import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { useState, useEffect, Fragment } from 'react'
import { Tab, Dialog, Transition } from '@headlessui/react'
import { Head } from '@inertiajs/react';
import { TabPanel, TabGrid } from '@/Components/TabPanel';
import { useForm } from '@inertiajs/react';
import { MySwal } from '@/lib/sweetalert';
import { router } from '@inertiajs/react';

function classNames(...classes) {
    return classes.filter(Boolean).join(' ')
}

export default function Catalogue({ auth, annual, cd, cp, csr, financial, gms, press, sustain }) {
    const [isOpen, setOpen] = useState(false)
    const [isDestroy, setDestroy] = useState(false)
    const { data, setData, post, delete: hapus, processing, errors, reset } = useForm({
        name: '',
        category: '',
        file: '',
        thumbnail: ''
    })

    const [isShow, setShow] = useState(false)

    useEffect(() => {
        if (data && isDestroy) {
        }
    }, [data, isDestroy]);

    const clearData = () => {
        setData({
            name: '',
            category: '',
            file: '',
            thumbnail: ''
        })
    }

    const Show = (category, file, judul, thumbnail) => {
        openShow()
        setData({
            name: judul,
            category: category,
            file: file,
            thumbnail: thumbnail
        })
    }

    const closeShow = () => {
        setOpen(false)
        clearData()
    }

    const openShow = () => {
        setOpen(true)
    }

    const closeModal = () => {
        setShow(false)
        clearData()
    }

    const openModal = () => {
        setShow(true)
        clearData()
    }

    const store = (e) => {
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
                post('/fif-admin/investor-relationship', {
                    forceFormData: true,
                    preserveScroll: true,
                    onSuccess: (e) => {
                        if (e.props.response.status) {
                            MySwal.fire(
                                'Success',
                                'Data added successfully',
                                'success'
                            )
                            closeModal()
                            router.reload()
                        } else {
                            MySwal.fire(
                                'Error',
                                e.props.response.message,
                                'error'
                            )
                            router.reload()
                        }
                    },
                })
            }
        })
    }

    const destroy = (e) => {
        e.preventDefault()
        hapus('/fif-admin/investor-relationship', {
            preserveScroll: true,
            onSuccess: (e) => {
                console.log(e.props)
                if (e.props.response.status) {
                    MySwal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                    router.reload()
                    closeShow()
                } else {
                    MySwal.fire(
                        'Fail!',
                        'Opps!, something wrong.',
                        'error'
                    )
                    router.reload()
                }
            },
        })
    }

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Investor Relationship</h2>}
        >
            <Head title="Investor Relationship" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                        <Tab.Group>
                            <Tab.List className="flex space-x-1 rounded-xl bg-gray-900/10 p-1">
                                <TabPanel>Annual</TabPanel>
                                <TabPanel>C. Disclosure</TabPanel>
                                <TabPanel>C. Prospectus</TabPanel>
                                <TabPanel>CSR Information</TabPanel>
                                <TabPanel>Financial</TabPanel>
                                <TabPanel>GMS</TabPanel>
                                <TabPanel>Press Release</TabPanel>
                                <TabPanel>Sustainability</TabPanel>
                            </Tab.List>
                            <Tab.Panels className="mt-2">
                                <Tab.Panel
                                    className={classNames(
                                        'rounded-xl bg-white p-3',
                                        'ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none'
                                    )}
                                >
                                    <button onClick={() => { openModal(), setData('category', 'annual') }} className='flex w-full text-white justify-center bg-green-500 hover:bg-green-600 rounded-md p-3 mb-3 cursor-pointer'>
                                        Add New
                                    </button>
                                    <div className='grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3'>
                                        {annual?.length < 1 && <>No Data Here</>}
                                        {annual?.map((data, i) =>
                                            <TabGrid key={i} file={data.file} thumbnail={data.thumbnail} judul={data.name} category={data.category} destroy={Show} />
                                        )}
                                    </div>
                                </Tab.Panel>
                                <Tab.Panel
                                    className={classNames(
                                        'rounded-xl bg-white p-3',
                                        'ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none'
                                    )}
                                >
                                    <button onClick={() => { openModal(), setData('category', 'cd') }} className='flex w-full text-white justify-center bg-green-500 hover:bg-green-600 rounded-md p-3 mb-3 cursor-pointer'>
                                        Add New
                                    </button>
                                    <div className='grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3'>
                                        {cd?.length < 1 && <>No Data Here</>}
                                        {cd?.map((data, i) =>
                                            <TabGrid key={i} file={data.file} thumbnail={data.thumbnail} judul={data.name} category={data.category} destroy={Show} />
                                        )}
                                    </div>
                                </Tab.Panel>
                                <Tab.Panel
                                    className={classNames(
                                        'rounded-xl bg-white p-3',
                                        'ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none'
                                    )}
                                >
                                    <button onClick={() => { openModal(), setData('category', 'cp') }} className='flex w-full text-white justify-center bg-green-500 hover:bg-green-600 rounded-md p-3 mb-3 cursor-pointer'>
                                        Add New
                                    </button>
                                    <div className='grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3'>
                                        {cp?.length < 1 && <>No Data Here</>}
                                        {cp?.map((data, i) =>
                                            <TabGrid key={i} file={data.file} thumbnail={data.thumbnail} judul={data.name} category={data.category} destroy={Show} />
                                        )}
                                    </div>
                                </Tab.Panel>
                                <Tab.Panel
                                    className={classNames(
                                        'rounded-xl bg-white p-3',
                                        'ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none'
                                    )}
                                >
                                    <button onClick={() => { openModal(), setData('category', 'csr') }} className='flex w-full text-white justify-center bg-green-500 hover:bg-green-600 rounded-md p-3 mb-3 cursor-pointer'>
                                        Add New
                                    </button>
                                    <div className='grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3'>
                                        {csr?.length < 1 && <>No Data Here</>}
                                        {csr?.map((data, i) =>
                                            <TabGrid key={i} file={data.file} thumbnail={data.thumbnail} judul={data.name} category={data.category} destroy={Show} />
                                        )}
                                    </div>
                                </Tab.Panel>
                                <Tab.Panel
                                    className={classNames(
                                        'rounded-xl bg-white p-3',
                                        'ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none'
                                    )}
                                >
                                    <button onClick={() => { openModal(), setData('category', 'financial') }} className='flex w-full text-white justify-center bg-green-500 hover:bg-green-600 rounded-md p-3 mb-3 cursor-pointer'>
                                        Add New
                                    </button>
                                    <div className='grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3'>
                                        {financial?.length < 1 && <>No Data Here</>}
                                        {financial?.map((data, i) =>
                                            <TabGrid key={i} file={data.file} thumbnail={data.thumbnail} judul={data.name} category={data.category} destroy={Show} />
                                        )}
                                    </div>
                                </Tab.Panel>
                                <Tab.Panel
                                    className={classNames(
                                        'rounded-xl bg-white p-3',
                                        'ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none'
                                    )}
                                >
                                    <button onClick={() => { openModal(), setData('category', 'gms') }} className='flex w-full text-white justify-center bg-green-500 hover:bg-green-600 rounded-md p-3 mb-3 cursor-pointer'>
                                        Add New
                                    </button>
                                    <div className='grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3'>
                                        {gms?.length < 1 && <>No Data Here</>}
                                        {gms?.map((data, i) =>
                                            <TabGrid key={i} file={data.file} thumbnail={data.thumbnail} judul={data.name} category={data.category} destroy={Show} />
                                        )}
                                    </div>
                                </Tab.Panel>
                                <Tab.Panel
                                    className={classNames(
                                        'rounded-xl bg-white p-3',
                                        'ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none'
                                    )}
                                >
                                    <button onClick={() => { openModal(), setData('category', 'press') }} className='flex w-full text-white justify-center bg-green-500 hover:bg-green-600 rounded-md p-3 mb-3 cursor-pointer'>
                                        Add New
                                    </button>
                                    <div className='grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3'>
                                        {press?.length < 1 && <>No Data Here</>}
                                        {press?.map((data, i) =>
                                            <TabGrid key={i} file={data.file} thumbnail={data.thumbnail} judul={data.name} category={data.category} destroy={Show} />
                                        )}
                                    </div>
                                </Tab.Panel>
                                <Tab.Panel
                                    className={classNames(
                                        'rounded-xl bg-white p-3',
                                        'ring-white ring-opacity-60 ring-offset-2 ring-offset-blue-400 focus:outline-none'
                                    )}
                                >
                                    <button onClick={() => { openModal(), setData('category', 'sustain') }} className='flex w-full text-white justify-center bg-green-500 hover:bg-green-600 rounded-md p-3 mb-3 cursor-pointer'>
                                        Add New
                                    </button>
                                    <div className='grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3'>
                                        {sustain?.length < 1 && <>No Data Here</>}
                                        {sustain?.map((data, i) =>
                                            <TabGrid key={i} file={data.file} thumbnail={data.thumbnail} judul={data.name} category={data.category} destroy={Show} />
                                        )}
                                    </div>
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
                                <Dialog.Panel className="w-full max-w-xl transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all">
                                    <Dialog.Title
                                        as="h3"
                                        className="text-lg font-medium leading-6 text-gray-900 capitalize"
                                    >
                                        Add new Item
                                    </Dialog.Title>
                                    <form onSubmit={store}>
                                        <div className="mt-2">
                                            <p>Title <span className='text-red-600 text-sm'>*Required</span></p>
                                            <input type='text' onChange={(e) => setData('name', e.target.value)} className='capitalize w-full rounded-lg focus:outline-none bg-gray-50 focus:bg-white border-gray-300' />
                                        </div>
                                        <div className="mt-2">
                                            <p>File <span className='text-red-600 text-sm'>*Required</span></p>
                                            <input type='file' onChange={(e) => setData('file', e.target.files[0])} className='capitalize w-full focus:outline-none rounded-lg active:outline-none bg-gray-50 active:bg-white border file:py-2 file:cursor-pointer file:border-none file:bg-gray-700 file:mr-2 cursor-pointer file:text-white file:px-4 border-gray-300' />
                                        </div>

                                        <div className="mt-2">
                                            <p>Thumbnail <span className='text-gray-400 text-sm'>(optional)</span></p>
                                            <input type='file' accept='image/webp, image/png, image/jpeg' onChange={(e) => setData('thumbnail', e.target.files[0])} className='capitalize w-full focus:outline-none rounded-lg active:outline-none bg-gray-50 active:bg-white border file:py-2 file:cursor-pointer file:border-none file:bg-gray-700 file:mr-2 cursor-pointer file:text-white file:px-4 border-gray-300' />
                                        </div>
                                        <div className="mt-4">
                                            <button
                                                type="submit"
                                                className="mr-2 inline-flex justify-center rounded-md border border-transparent bg-blue-100 px-4 py-2 text-sm font-medium text-blue-900 hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2"
                                            >
                                                Save
                                            </button>
                                            <button
                                                type="reset"
                                                className="inline-flex justify-center rounded-md border border-transparent bg-gray-100 px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-offset-2"
                                            >
                                                Reset
                                            </button>
                                        </div>
                                    </form>
                                </Dialog.Panel>
                            </Transition.Child>
                        </div>
                    </div>
                </Dialog>
            </Transition>
            <Transition appear show={isOpen} as={Fragment}>
                <Dialog as="div" className="relative z-10" onClose={closeShow}>
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
                                <Dialog.Panel className="w-full max-w-xl transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all">
                                    <Dialog.Title
                                        as="h3"
                                        className="flex justify-center text-lg font-medium leading-6 text-gray-900 capitalize"
                                    >
                                        You want to delete it?
                                    </Dialog.Title>
                                    <form onSubmit={destroy}>
                                        <div className="mt-2">
                                            <p>Title</p>
                                            <input type='text' disabled={true} readOnly defaultValue={data.name} className='cursor-pointer capitalize w-full rounded-lg focus:outline-none bg-gray-50 focus:bg-white border-gray-300' />
                                        </div>
                                        <div className="mt-2">
                                            <p>File</p>
                                            <input type='text' disabled={true} readOnly defaultValue={data.file} onChange={(e) => setData('file', e.target.files[0])} className='capitalize w-full focus:outline-none rounded-lg active:outline-none bg-gray-50 active:bg-white border file:py-2 file:cursor-pointer file:border-none file:bg-gray-700 file:mr-2 cursor-pointer file:text-white file:px-4 border-gray-300' />
                                        </div>

                                        <div className="mt-2">
                                            <p>Thumbnail</p>
                                            <input type='text' disabled={true} readOnly defaultValue={data.thumbnail} onChange={(e) => setData('thumbnail', e.target.files[0])} className='capitalize w-full focus:outline-none rounded-lg active:outline-none bg-gray-50 active:bg-white border file:py-2 file:cursor-pointer file:border-none file:bg-gray-700 file:mr-2 cursor-pointer file:text-white file:px-4 border-gray-300' />
                                        </div>
                                        <div className="mt-4 flex justify-center">
                                            <button
                                                type="submit"
                                                className="mr-2 inline-flex justify-center rounded-md border border-transparent bg-red-100 px-4 py-2 text-sm font-medium text-red-900 hover:bg-red-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-red-500 focus-visible:ring-offset-2"
                                            >
                                                Yes, Delete it!
                                            </button>
                                            <button
                                                type="button"
                                                className="inline-flex justify-center rounded-md border border-transparent bg-gray-100 px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-offset-2"
                                                onClick={() => closeShow()}
                                            >
                                                Cancel
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
