<x-layout>
    <form class="shadow p-5" action="/product" method="POST">
        @csrf
        <h1>Chose Product Category</h1>

        <div class="mb-3">
            <label for="category" class="form-label">Product Category</label>
            <select class="form-select" name="category">
                <option value="1">T-Shirt</option>
                <option value="2">CD</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
