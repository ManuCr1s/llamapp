<script>
export default{
    name:'RolesIndex'
}
</script>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';
defineProps({
    roles:{
        type:Object,
        required:true   
    }
})
const deleteRole = id => {
    if(confirm('¿Esta seguro de Eliminar el Rol?')){
        Inertia.delete(route('roles.destroy',id));
    }
}
</script>
<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 loading-tight">Roles</h1>   
        </template>
        <div class="py-10 sm:py-10">
            <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-10 px-6 lg:px-8 xl:grid-cols-3">
                <div class="max-w-2xl">
                    <h2 class="text-1xl font-bold tracking-tight text-gray-900 sm:text-1xl" >
                        <Link :href="route('roles.create')" class="text-white bg-indigo-500 hover:bg-indigo-700 py-2 px-4 rounded">
                            CREAR ROLE
                        </Link>
                    </h2>
                    <p class="mt-5 text-lg leading-8 text-gray-600">Puede ingresar nuevo roles para el sistema</p>
                </div>
                <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                    <li v-for="role in roles.data">
                        <div class="flex items-center gap-x-6">
                                    <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ role.name }}</h3>
                                    <p class="text-sm font-semibold leading-6 text-indigo-600"><Link :href="route('roles.edit',role.id)"> Editar</Link> | <Link @click="deleteRole(role.id)">Eliminar</Link></p>
                                </div>
                        </div>                
                    </li>
                    <div class="flex mt-2">
                            <Link v-if="roles.current_page > 1" :href="roles.prev_page_url" class="mt-8 block rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-10">Antes</Link>
                            <div v-else></div>
                            <Link v-if="roles.current_page < roles.last_page" :href="roles.next_page_url" class="mt-8 block rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-indigo-600 ring-1 ring-inset ring-indigo-200 hover:ring-indigo-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-10">Despues</Link>
                            <div v-else></div>
                    </div>
                    
                </ul>
             
            </div>

        </div>
    </AppLayout>
</template>