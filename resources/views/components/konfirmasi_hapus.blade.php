<div id="deleteModal" class="fixed inset-0 hidden bg-black bg-opacity-50 items-center justify-center">
    <div class="bg-white p-6 rounded shadow-lg">
        <h3 class="text-xl font-bold mb-4">Confirm Delete</h3>
        <p>{{ $message ?? 'Are you sure you want to delete this item?' }}</p>
        <div class="mt-4 flex justify-end space-x-2">
            <button class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600" onclick="closeModal()">Cancel</button>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
            </form>
        </div>
    </div>
</div>

<script>
    function confirmDelete(action, message = null) {
        const modal = document.getElementById('deleteModal');
        const deleteForm = document.getElementById('deleteForm');
        const messageText = modal.querySelector('p');

        deleteForm.action = action;
        if (message) messageText.textContent = message;

        modal.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.add('hidden');
    }
</script>
