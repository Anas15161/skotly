<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between align-items-center">
                <h5 class="modal-title mx-auto" id="registerModalLabel">Réservez votre cours​​</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="registrationForm" action="{{ route('registerCour') }}" method="POST">
                    @csrf
                    <!-- Step 1: First Fields -->
                    <div id="step1">
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Nom et prénom') }}</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Adresse email') }}</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">{{ __('Numéro de téléphone') }}</label>
                            <input type="number" class="form-control" id="phone" name="phone" required>
                        </div>


                        <button type="button" id="nextButton" class="btn btn-primary">Suivant</button>
                    </div>

                    <!-- Step 2: Additional Fields (Initially Hidden) -->
                    <div id="step2" style="display: none;">
                        <div class="form-group mb-3">
                            <label for="school_level" class="bold">{{ __('Cycle scolaire') }}</label>
                            <div class="position-relative">
                                <select name="cycle[]" id="cycle" class="form-control">
                                    @php
                                        $previousLevel = null;
                                    @endphp

                                    @foreach($cycles as $cycle)
                                        @if($previousLevel !== $cycle->schoolLevel->slug)
                                            @if($previousLevel !== null)
                                                </optgroup>
                                            @endif

                                            <optgroup label="{{ $cycle->schoolLevel->slug }}">
                                        @endif

                                        <option value="{{ $cycle->id }}">
                                            {{ $cycle->name }}
                                        </option>

                                        @php
                                            $previousLevel = $cycle->schoolLevel->slug;
                                        @endphp
                                    @endforeach

                                    </optgroup> <!-- Fermer le dernier groupe -->
                                </select>

                                <i class="fas fa-chevron-down position-absolute"
                                   style="top: 50%; right: 10px; transform: translateY(-50%); pointer-events: none;"></i>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="matieres" class="font-weight-bold">{{ __('Choisissez vos matières') }}</label>
                            <div class="row">
                                @foreach($matieres as $matiere)
                                    <div class="col-md-4 mb-2"> <!-- Ajout de mb-2 pour l'espacement entre les éléments -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="matieres[]" value="{{ $matiere->id }}" id="matiere{{ $matiere->id }}">
                                            <label class="form-check-label" for="matiere{{ $matiere->id }}">
                                                {{ $matiere->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="mb-3">
    <label for="name" class="form-label">{{ __('Nom et prénom') }}</label>
    <input type="text" class="form-control" id="name" name="name" required>
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<script>
    document.getElementById('nextButton').addEventListener('click', function() {
        // Hide the first step
        document.getElementById('step1').style.display = 'none';
        // Show the second step
        const step2 = document.getElementById('step2');
        step2.style.display = 'block';

        // Force reflow
        void step2.offsetWidth; // This line forces a reflow

        // Initialize Select2 after showing step 2
        $('.select2').select2();
    });

    // Reset the modal when it's closed
    var registerModal = document.getElementById('registerModal');
    registerModal.addEventListener('hidden.bs.modal', function () {
        // Reset form and hide step 2
        document.getElementById('step1').style.display = 'block';
        document.getElementById('step2').style.display = 'none';
        document.getElementById('registrationForm').reset(); // Reset the form
        $('.select2').val(null).trigger('change'); // Reset Select2
    });
</script>
