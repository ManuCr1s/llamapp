<script>
export default{
    name:'CriadoresIndex'
}
</script>
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';
defineProps({
    criadores:{
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
            <h1 class="font-semibold text-xl text-gray-800 loading-tight">Criador</h1>   
        </template>
        <div class="py-10 sm:py-10">
            <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-10 px-6 lg:px-8 xl:grid-cols-3">
                <div class="max-w-2xl">
                    <h2 class="text-1xl font-bold tracking-tight text-gray-900 sm:text-1xl" >
                        <Link :href="route('criadores.create')" class="text-white bg-indigo-500 hover:bg-indigo-700 py-2 px-4 rounded">
                            CREAR CRIADOR
                        </Link>
                    </h2>
                    <p class="mt-5 text-lg leading-8 text-gray-600">Puede ingresar nuevo criadores para el sistema</p>
                </div>
                <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                    <li v-for="criador in criadores.data">
                        <div class="flex items-center gap-x-6">
                                    <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div>

                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ criador.nombres + ' '+criador.apellido_paterno }}</h3>
                                    <p class="text-sm font-semibold leading-6 text-indigo-600"><Link :href="route('criadores.edit',criador.id_criador)"> Editar</Link> | <Link>Eliminar</Link></p>
                                </div>
                        </div>                
                    </li>
                   
                    
                </ul>
             
            </div>

        </div>
    </AppLayout>
</template>