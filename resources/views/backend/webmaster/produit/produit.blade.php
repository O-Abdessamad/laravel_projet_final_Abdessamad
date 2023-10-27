<x-app-layout>
    @if (Auth::user()->roles[0]->name == 'admin')
        <div class=" d-none">
            {{ $createur = 1 }}
        </div>
    @else
        <div class=" d-none">
            {{ $createur = 0 }}
        </div>
    @endif
@include('backend.webmaster.partials.create')


    <table class="table container mt-10 ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Prix</th>
                <th scope="col">Image</th>
                <th scope="col">Stock</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supperimer</th>
            </tr>
        </thead>



        <tbody>

            @foreach ($produits as $produit)
                <tr valign="middle">
                    <th scope="row">
                        {{ $produit->id }}
                    </th>
                    <td>
                        {{ $produit->titre }}
                    </td>
                    <td>
                        {{ $produit->prix }}
                    </td>
                    <td>
                        <img width="100" height="100" src="{{ asset('storage/imgs/product/' . $produit->image) }}">

                    </td>
                    <td>
                        {{ $produit->stock }}
                    </td>
                    <td>
                        @include('backend.webmaster.partials.edit')
                    </td>
                    <td>

                        <form action="{{ route('backendW.destroyproduit', $produit->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" @if ($produit->createur) disabled  @else  @endif  class=" btn btn-danger text-white "
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')"><i
                                    class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>

                </tr>
            @endforeach

        </tbody>

    </table>

   
</x-app-layout>
