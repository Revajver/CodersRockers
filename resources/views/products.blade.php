<x-layout>

    <a class="btn btn-success" href="/product/create">Add Product</a>
    <div class="p-3 shadow mt-2">
        <table class="table shadow">
            <h1>T-Shirts</h1>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Desc</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Category</th>
                    <th scope="col">Color</th>
                    <th scope="col">Size</th>
                    <th scope="col">Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tshirts as $tshirt)
                {{ dd($tshirt) }}
                    <tr>
                        <td>{{ $tshirt->product_name }}</td>
                        <td>{{ $tshirt->product_desc }}</td>
                        <td>{{ $tshirt->product_price }}</td>
                        <td>{{ $tshirt->product_amount }}</td>
                        <td>{{ $tshirt->category->category_name }}</td>
                        <td>{{ $tshirt->tshirt_color }}</td>
                        <td>{{ $tshirt->tshirt_size }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-warning" href="/product/{{ $tshirt->product_id }}/edit">EDIT</a>
                                <form action="/product/{{ $tshirt->product_id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class="table shadow">
            <h1>CDS</h1>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Desc</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Category</th>
                    <th scope="col">Title</th>
                    <th scope="col">Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cds as $cd)
                    <tr>
                        <td>{{ $cd->product_name }}</td>
                        <td>{{ $cd->product_desc }}</td>
                        <td>{{ $cd->product_price }}</td>
                        <td>{{ $cd->product_amount }}</td>
                        <td>{{ $cd->category->category_name }}</td>
                        <td>{{ $cd->cd->cd_title }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-warning" href="/product/{{ $cd->product_id }}/edit">EDIT</a>
                                <form action="/product/{{ $cd->product_id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
