<x-layout>
    <form class="shadow p-5" action="/createTshirt" method="POST">
        @csrf
        <h1>Create T-Shirt</h1>

        <input type="hidden" name="category" value="{{ $category }}">

        <div class="mb-3">
            <label for="name" class="form-label">T-Shirt Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label for="desc" class="form-label">T-Shirt Description</label>
            <input type="text" class="form-control" name="desc">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">T-Shirt Price</label>
            <input type="number" class="form-control" name="price">
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">T-Shirt Amount</label>
            <input type="number" class="form-control" name="amount">
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">T-Shirt Color</label>
            <select class="form-select" name="color">
                <option value="black">Black</option>
                <option value="white">White</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="size" class="form-label">T-Shirt Size</label>
            <select class="form-select" name="size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
