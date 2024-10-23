<div class="modal-header">
    <h6 class="modal-title fs-5" id="">{{ __('Update Quiz Question') }}</h6>
</div>

<div class="modal-body">
    <form action="{{ route('admin.course-chapter.quiz-question.update', $question->id) }}" method="POST"
        class="add_lesson_form instructor__profile-form">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="title">{{ __('Question Title') }} <code>*</code></label>
                    <input id="title" name="title" type="text" class="form-control"
                        value="{{ $question->title }}">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="title">{{ __('Grade') }} <code>*</code></label>
                    <input id="title" name="grade" type="text" class="form-control"
                        value="{{ $question->grade }}">
                </div>
            </div>
        </div>

        <div>
            <button class="add-answer btn" type="button">{{ __('Add Answer') }}</button>
        </div>

        <div class="answer-container">
            @foreach ($question->answers as $answer)
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="d-flex justify-content-between">
                                    <label for="answer">{{ __('Answer Title') }} <code>*</code></label>
                                    <button class="remove-answer" type="button"><i
                                            class="fas fa-trash-alt"></i></button>
                                </div>
                                <input class="answer form-control" name="answers[{{ $answer->id }}]" type="text"
                                    value="{{ $answer->title }}" required>
                            </div>
                            <div class="switcher d-flex mt-2">
                                <p class="mr-3">{{ __('Correct Answer') }}</p>
                                <label for="toggle-{{ $answer->id }}">
                                    <input class="correct" type="checkbox" id="toggle-{{ $answer->id }}"
                                        value="1" name="correct[{{ $answer->id }}]"
                                        @checked($answer->correct == 1) />
                                    <span><small></small></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-primary submit-btn">{{ __('Update') }}</button>
        </div>
    </form>
</div>