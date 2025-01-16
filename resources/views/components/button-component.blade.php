    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#{{ $modalTarget }}">
        {{ $btnTitle }}
    </button>

    <!-- Modal -->
    <div class="modal fade" id="{{ $modalTarget }}" tabindex="-1" aria-labelledby="{{ $modalLabel }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="{{ $modalLabel }}">{{ $contentTitle }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="{{ $formId }}" action="{{ $routeAction }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="{{ $contentId }}" class="form-label">{{ $contentLabel }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="categoryName" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Add other form fields as needed -->

                        <button type="" class="btn btn-primary" style="width: 100%;">{{ $sbtTitle }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
