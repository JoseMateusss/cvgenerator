<header class="filament-header items-start justify-between space-y-2 sm:flex sm:space-x-4 sm:space-y-0 sm:py-4 sm:rtl:space-x-reverse">
    <div>
        <h1 class="filament-header-heading text-2xl font-bold tracking-tight">
            Editar currículo
        </h1>

    </div>

    <div class="filament-page-actions flex flex-wrap items-center gap-4 justify-start shrink-0">


        <a class="filament-button filament-button-size-md inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset dark:focus:ring-offset-0 min-h-[2.25rem] px-4 text-sm text-white shadow focus:ring-white border-transparent bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 filament-page-button-action" href="http://127.0.0.1:8000/admin/curricula/create" dusk="filament.admin.action.create">

        <span class="">
            Baixar currículo
        </span>

        </a>



    </div>
</header>

<div
    x-data="{
      openTab: 1,
      activeClasses: 'border-l border-t border-r rounded-t text-blue-700 bg-green-500 text-white',
      inactiveClasses: 'text-black-500 hover:text-black-800'
    }"
    class="mt-6"
>
    <ul class="flex border-b">
        <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
            <a :class="openTab === 1 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                Dados pessoais
            </a>
        </li>
        <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
            <a :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Experiências Profissionais</a>
        </li>
        <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
            <a :class="openTab === 3 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Formações</a>
        </li>
    </ul>
    <div class="w-full pt-4">
        <div x-show="openTab === 1">
            {{ $record->name }}
        </div>
        <div x-show="openTab === 2">Tab #2</div>
        <div x-show="openTab === 3">Tab #3</div>
    </div>
</div>
