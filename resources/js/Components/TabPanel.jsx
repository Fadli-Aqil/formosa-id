import { Tab } from "@headlessui/react"
import { Link } from "@inertiajs/react"
import { router } from "@inertiajs/react"

function classNames(...classes) {
    return classes.filter(Boolean).join(' ')
}

export function TabPanel({ children }) {
    return (
        <Tab
            className={({ selected }) =>
                classNames(
                    'w-full rounded-lg py-2.5 text-sm font-medium leading-5 text-blue-700',
                    'focus:outline-none',
                    selected
                        ? 'bg-blue-500 text-white shadow '
                        : 'text-blue-100 hover:bg-white/[0.50]'
                )
            }
        >
            {children}
        </Tab>
    )
}

export function TabList({ folder, categories, flavour, description, size, bpom, halal, show, file }) {
    return (
        <li
            className="relative rounded-md p-3 hover:bg-gray-50 cursor-pointer overflow-hidden pr-3"
            onClick={() => show(folder, file, categories, flavour, description, size, bpom, halal, categories, flavour)}
        >
            <div className='pl-24 md:pl-32 items-center relative'>
                <img className='absolute left-0 w-24 h-24 md:w-32 md:h-32 aspect-square object-cover' src={'../assets/img/catalogue/' + folder + '/' + file} />
                <div className='ml-4 relative'>
                    <h3 className='font-bold text-sm md:text-md capitalize'>{flavour}</h3>
                    <p className='truncate text-sm md:text-md'>{description}</p>
                    <div className='py-1 md:py-2 px-2 md:px-6 rounded-lg border-gray-200 border bg-gray-100 w-full'>
                        <table>
                            <tbody>
                                <tr>
                                    <td className='font-light text-xs md:text-sm text-gray-700'>Size</td>
                                    <td className='font-light text-xs md:text-sm text-gray-700 px-2 md:px-4'>:</td>
                                    <td className='font-light text-xs md:text-sm text-gray-700'>{size}</td>
                                </tr>
                                <tr>
                                    <td className='font-light text-xs md:text-sm text-gray-700'>BPOM RI</td>
                                    <td className='font-light text-xs md:text-sm text-gray-700 px-2 md:px-4'>:</td>
                                    <td className='font-light text-xs md:text-sm text-gray-700'>{bpom}</td>
                                </tr>
                                <tr>
                                    <td className='font-light text-xs md:text-sm text-gray-700'>Halal</td>
                                    <td className='font-light text-xs md:text-sm text-gray-700 px-2 md:px-4'>:</td>
                                    <td className='font-light text-xs md:text-sm text-gray-700'>{halal}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </li>
    )
}

export function TabGrid({thumbnail, file,  category, judul, destroy}) {

    const hapus = () => {
        destroy(category, file, judul, thumbnail)
    }
    return (
            <div className='relative overflow-hidden rounded-lg bg-white shadow'>
                <img src={`../assets/files/thumbnails/${thumbnail}`} className='w-[720px] object-cover' />
                <div className='flex items-center justify-center p-2 absolute top-0 hover:bg-white/50 hover:opacity-100 opacity-0 duration-300 transition-all w-full h-full'>
                    <div>
                        <p className='text-sm md:text-lg font-bold text-center'>{judul}</p>
                        <div className='mt-2'>
                            <button onClick={() => window.location.href = `/download?file=${judul}&category=${category}`} className='bg-blue-500 px-2 py-1 w-full mb-1 text-sm md:text-md text-white rounded-lg hover:bg-blue-600 active:bg-blue-700'>Download</button>
                            <button onClick={() => hapus()} className='bg-red-500 px-2 py-1 w-full text-sm md:text-md text-white rounded-lg hover:bg-red-600 active:bg-red-700'>Delete</button>
                        </div>
                    </div>
                </div>
            </div>
    )
}