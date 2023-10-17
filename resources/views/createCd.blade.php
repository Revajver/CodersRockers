<x-layout>
    <form class="shadow p-5" action="/createCd" method="POST">
        @csrf
        <h1>Create CD</h1>

        <input type="hidden" name="category" value="{{ $category }}">

        <div class="mb-3">
            <label for="name" class="form-label">CD Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label for="desc" class="form-label">CD Description</label>
            <input type="text" class="form-control" name="desc">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">CD Price</label>
            <input type="number" class="form-control" name="price">
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">CD Amount</label>
            <input type="number" class="form-control" name="amount">
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">CD Title</label>
            <select class="form-select" name="title">
                <option value="2020 - Corona Rocks">2020 - Corona Rocks</option>
                <option value="2023 - Lap is on my mind">2023 - Lap is on my mind</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
