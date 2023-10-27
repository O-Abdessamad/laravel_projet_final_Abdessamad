    <!-- Button trigger modal -->
  
    <button type="button" @if ($produit->createur) disabled  @else  @endif class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalproduit{{$produit->id}}">
        <i class="fa-solid fa-pen-to-square"></i>
    </button>
   


<!-- Modal -->
<div class="modal fade" id="exampleModalproduit{{$produit->id}}" tabindex="-1" aria-labelledby="exampleModalproduit{{$produit->id}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <form action={{ route('backendW.updateproduit', $produit->id) }} method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Titre</label>
                        <input type="text" value="{{$produit->titre}}" name="titre" class="form-control" id="titre"
                            aria-describedby="titre">
                    </div>

                    <div class="mb-3">
                        <label for="prix" class="form-label">Prix</label>
                        <input name="prix" value="{{$produit->prix}}" type="number" min="0" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image"
                            aria-describedby="image">
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input name="stock" value="{{$produit->stock}}" type="number" min="0" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <select name="categorie"  class="form-select" aria-label="Default select example">
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->name }} "> {{ $categorie->name }}</option>
                        @endforeach
                    </select>


                    <div class="modal-footer">
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Modifier</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>