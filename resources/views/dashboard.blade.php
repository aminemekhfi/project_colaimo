@extends('.layouts.app')
@section('content')
<div class="container">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{-- <h2>Salut! {{ Auth::user()->name }}</h2>
    <h1>les utilisateur {{$Users}}</h1> --}}
    <!-- component -->
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 p-5 lg:grid-cols-4 xl:grid-cols-4">
        <!-- 1 card -->
        <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
            <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-pink-500 left-4 -top-6">
                <!-- svg  -->
                <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <i stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="bx bx-user nav_icon" ></i>
                </svg>
            </div>
            <div class="mt-8">
                <p class="text-xl font-semibold my-2">Utilisateur</p>
                <div class="flex space-x-2 text-gray-400 text-sm">
            
                </div>
                <div class="flex space-x-2 text-gray-400 text-sm my-3">
                 
                </div>
                <div class="border-t-2"></div>

                <div class="flex justify-between">
                    <div class="my-2">
                        <p class="font-semibold text-base mb-2">Nombre </p>
                        <div class="flex text-xl ">
                           <p style="font-weight: bold;">{{$Users}}</p> 
                        </div>
                    </div>

                    @can('viewany', App\Models\User::class)
                     <div class="my-2">
                        <p class="font-semibold text-base mb-2">Voir</p>
                        <div class="text-base text-gray-400 font-semibold">
                            <a href="{{ route('User.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="24" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                </svg>
                            </a>     
                        </div>
                    </div>
                    @endcan

                </div>
            </div>
        </div>

        <!-- 2 card -->
        <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
            <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-green-500 left-4 -top-6">
                <!-- svg  -->
                <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <i stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="bx bx-desktop nav_icon" ></i>
                </svg>
            </div>

            <div class="mt-8">
                <p class="text-xl font-semibold my-2">Parc informatique</p>
                <div class="flex space-x-2 text-gray-400 text-sm">
                </div>
                <div class="flex space-x-2 text-gray-400 text-sm my-3">
                    
                </div>
                <div class="border-t-2 "></div>

                <div class="flex justify-between">
                    <div class="my-2">
                        <p class="font-semibold text-base mb-2">Nombre</p>
                        <div class="flex text-xl">
                            <p style="font-weight: bold;">{{$ParcInfo}}</p>
                        </div>
                    </div>

                    @can('viewany',App\Models\parcinfo::class)
                     <div class="my-2">
                        <p class="font-semibold text-base mb-2">Voir</p>
                        <div class="text-base text-gray-400 font-semibold">
                            <a href="{{ route('parcinfo.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="24" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                </svg>
                            </a>     
                        </div>
                    </div>
                    @endcan

                </div>
            </div>
        </div>

        <!-- 3 card -->
        <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
            <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-blue-500 left-4 -top-6">
                <!-- svg  -->
                <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <i class='bx bxs-graduation nav_icon'></i>
                </svg>
            </div>
            <div class="mt-8">
                <p class="text-xl font-semibold my-2">Stagiaire</p>
                <div class="flex space-x-2 text-gray-400 text-sm">
                  
                </div>
                <div class="flex space-x-2 text-gray-400 text-sm my-3">
                   
                </div>
                <div class="border-t-2 "></div>

                <div class="flex justify-between">
                    <div class="my-2">
                        <p class="font-semibold text-base mb-2">Nombre</p>
                        <div class="flex text-xl">
                            <p style="font-weight: bold;">{{$Stagiaires}}</p>
                        </div>
                    </div>

                    @can('viewany', App\Models\Stagiaire::class)
                     <div class="my-2">
                        <p class="font-semibold text-base mb-2">Voir</p>
                        <div class="text-base text-gray-400 font-semibold">
                            <a href="{{ route('Stagiaire.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="24" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                </svg>
                            </a>     
                        </div>
                    </div>
                    @endcan

                </div>
            </div>
        </div>

         <!-- 4 card -->
        <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
            <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-yellow-500 left-4 -top-6">
                <!-- svg  -->
                <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <i class='bx bx-check-shield nav_icon'></i>
                </svg>
            </div>
            <div class="mt-8">
                <p class="text-xl font-semibold my-2">Tâches effectuées</p>
                <div class="flex space-x-2 text-gray-400 text-sm">
                    
                </div>
                <div class="flex space-x-2 text-gray-400 text-sm my-3">
              
                </div>
                <div class="border-t-2 "></div>

                <div class="flex justify-between">
                    <div class="my-2">
                        <p class="font-semibold text-base mb-2">Nombre</p>
                        <div class="flex text-xl">
                            <p style="font-weight: bold;">{{$TachEffectuees}}</p>
                        </div>
                    </div>

                    @can('viewany', App\Models\TachEffectuee::class)
                     <div class="my-2">
                        <p class="font-semibold text-base mb-2">Voir</p>
                        <div class="text-base text-gray-400 font-semibold">
                            <a href="{{ route('TachEffectuee.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="24" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                </svg>
                            </a>     
                        </div>
                    </div>
                    @endcan
                </div>
            </div>
        </div>
        <!-- card 5 -->
        <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
            <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl left-4 -top-6" style="background-color:#d1a456">
                <!-- svg  -->
                <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <i class='bx bx-transfer-alt nav_icon'></i>
                </svg>
            </div>
            <div class="mt-8">
                <p class="text-xl font-semibold my-2">Changement de matériel</p>
                <div class="flex space-x-2 text-gray-400 text-sm">
              
                </div>
                <div class="flex space-x-2 text-gray-400 text-sm my-3">
              
                </div>
                <div class="border-t-2 "></div>

                <div class="flex justify-between">
                    <div class="my-2">
                        <p class="font-semibold text-base mb-2">Voir</p>
                        <div class="flex text-xl">
                            <p style="font-weight: bold;">{{$ChangMats}}</p>
                        </div>
                    </div>

                    @can('viewany', App\Models\ChangMat::class)
                     <div class="my-2">
                        <p class="font-semibold text-base mb-2">Voir</p>
                        <div class="text-base text-gray-400 font-semibold text-center" >
                            <a href="{{ route('changmat.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="24" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                </svg>                                
                            </a>                    
                        </div>
                    </div>
                    @endcan

                </div>
            </div>
        </div>
</div>
</div>
@endsection