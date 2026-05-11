<form class="add-form mt-4" action="{{ url('admin/update-quiz') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $quiz->id }}">

    <div class="row">
        <div class="mb-3 col-md-12">
            <label class="form-label">Question *</label>
            <input type="text" class="form-control" name="question"
                   value="{{ old('question', $quiz->question) }}">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Option 1 *</label>
            <input type="text" class="form-control" name="option1"
                   value="{{ old('option1', $quiz->option1) }}">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Option 2 *</label>
            <input type="text" class="form-control" name="option2"
                   value="{{ old('option2', $quiz->option2) }}">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Option 3 *</label>
            <input type="text" class="form-control" name="option3"
                   value="{{ old('option3', $quiz->option3) }}">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Option 4 *</label>
            <input type="text" class="form-control" name="option4"
                   value="{{ old('option4', $quiz->option4) }}">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Answer *</label>
            <input type="text" class="form-control" name="answer"
                   value="{{ old('answer', $quiz->answer) }}">
        </div>

        <div class="mb-3 col-md-6">
            <label class="form-label">Category *</label>
            <select class="form-control" name="categoryId">
                <option value="">-- Select --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $quiz->categoryId == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3 row">
            <div class="col-12 text-center">
                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                    Update
                </button>
                <div class="message error"></div>
            </div>
        </div>
    </div>
</form>
