@props(['message', 'vehicules','chauffeurs','demandes'])
<!-- Modal enregistrement -->

   
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Enregistrer une course
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{route('courses.store')}}" method="POST" class="p-4 md:p-5">
              @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                  <div class="col-span-2">
                      {{-- <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nom</label> --}}
                      <label for="vehicule_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">vehicule</label>
                      <select name="vehicule_id" id="vehicule_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                          <option value="">Sélectionnez un vehicule</option>
                          @foreach($vehicules as $vehicule)
                          <option value="{{ $vehicule->id }}">{{ $vehicule->plaque }}= {{$vehicule->capacite}} </option>
                          @endforeach
                      </select>
                        
                      <label for="chauffeur_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">chauffeur</label>
                      <select name="chauffeur_id" id="chauffeur_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                          <option value="">Sélectionnez un chauffeur</option>
                          @foreach($chauffeurs as $chauffeur)
                          <option value="{{ $chauffeur->id}}">{{ $chauffeur->user->name}}</option>
                          @endforeach
                      </select>
                      <label for="demande_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">demande</label>
                      <select name="demande_id" id="demande_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                          <option value="">Sélectionnez une demande</option>
                          @foreach($demandes as $demande)
                          <option value="{{ $demande->id}}">{{ $demande->motif}}</option>
                          @endforeach
                      </select>
                      <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">status</label>
                      <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                          <option value="en_attente">En attente</option>
                          <option value="en_cours">En cours</option>
                          <option value="terminé">Terminé</option>
                      </select>
                      <label for="commentaire" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">commentaire</label>
                      <textarea name="commentaire" id="commentaire" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </textarea>
                          
                      </select>
                              
                    </div>  
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-orange-400 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Ajouter
                </button>
            </form>  
        </div>
    </div>
</div> 
<script>
       
    function openModal() {
            document.getElementById('crud-modal').classList.remove('hidden');
        }
   
    </script>