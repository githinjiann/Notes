<x-app-layout>
 <div class="note-container single-note">
    <h1>Create new note</h1>
    <form action="{{ route('note.store') }}" method="POST" class="note">
        @csrf
        <textarea name="note" raw="10" class="note-body" placeholder="Enter your note here"></textarea>
        <div class="note-buttons">
            <a href="{{ route('note.index') }}" class="note-cancel-button">cancel</a>
            <button class="note-submit-button">submit</button>
        </div>

    </form>

 </div>
</x-app-layout>
