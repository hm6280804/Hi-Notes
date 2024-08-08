<x-app-layout>
    <div class="note-container single-note">
        <h1 style="display: flex; justify-content: center;">Edit Your Note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="note">
            @csrf
            @method('PUT') <!-- This is important for PUT requests -->
            <textarea name="note" class="note-body" rows="10" placeholder="Enter your note here">{{ $note->note }}</textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-buttons">Cancel</a>
                <button class="note-submit-button" type="submit">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
