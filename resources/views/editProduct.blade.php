<x-layout>
    <form class="shadow p-5" action="/product/{{ $product->product_id }}" method="POST">
        @csrf
        @method('PUT')
        <h1>Edit Product</h1>

        <input type="hidden" name="category" value="{{ $product->category_id }}">

        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" value="{{ $product->product_name }}">
        </div>

        <div class="mb-3">
            <label for="desc" class="form-label">Product Description</label>
            <input type="text" class="form-control" name="desc" value="{{ $product->product_desc }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Product Price</label>
            <input type="number" class="form-control" name="price" value="{{ $product->product_price }}">
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Product Amount</label>
            <input type="number" class="form-control" name="amount" value="{{ $product->product_amount }}">
        </div>

        @if ($product->category_id == '1')

            <div class="mb-3">
                <label for="color" class="form-label">Product Color</label>
                <select class="form-select" name="color">
                    @if ($product->tshirt->tshirt_color == 'black')
                        <option value="black" selected>Black</option>
                        <option value="white">White</option>
                    @elseif ($product->tshirt->tshirt_color == 'white')
                        <option value="black">Black</option>
                        <option value="white" selected>White</option>
                    @else
                        <option value="black">Black</option>
                        <option value="white">White</option>
                    @endif
                </select>
            </div>

            <div class="mb-3">
                <label for="size" class="form-label">Product Size</label>
                <select class="form-select" name="size">
                    @if ($product->tshirt->tshirt_size == 'S')
                        <option value="S" selected>S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    @elseif ($product->tshirt->tshirt_size == 'M')
                        <option value="S">S</option>
                        <option value="M" selected>M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    @elseif ($product->tshirt->tshirt_size == 'L')
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L" selected>L</option>
                        <option value="XL">XL</option>
                    @elseif ($product->tshirt->tshirt_size == 'XL')
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL" selected>XL</option>
                    @else
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    @endif
                </select>
            </div>
        @endif

        @if ($product->category_id == '2')
            <div class="mb-3">
                <label for="amount" class="form-label">CD Title</label>
                <select class="form-select" name="title">
                    @if ($product->cd->cd_title == '2020 - Corona Rocks')
                        <option value="2020 - Corona Rocks" selected>2020 - Corona Rocks</option>
                        <option value="2023 - Lap is on my mind">2023 - Lap is on my mind</option>
                    @elseif ($product->cd->cd_title == '2023 - Lap is on my mind')
                        <option value="2020 - Corona Rocks">2020 - Corona Rocks</option>
                        <option value="2023 - Lap is on my mind" selected>2023 - Lap is on my mind</option>
                    @else
                        <option value="2020 - Corona Rocks">2020 - Corona Rocks</option>
                        <option value="2023 - Lap is on my mind">2023 - Lap is on my mind</option>
                    @endif
                </select>
            </div>
        @endif

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
