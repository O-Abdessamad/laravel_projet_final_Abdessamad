<x-app-layout>


    
    <table class="table container mt-10">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supperimer</th>
            </tr>
        </thead>
            <tbody>
    
                @foreach ($allusers as $alluser )
                @if (($alluser->name)=="admin")

                    
                @else
                <tr>
                    <th scope="row">{{$alluser->id}}</th>
                    <td>{{$alluser->name}}</td>
                    <td>{{$alluser->email}}</td>
                    <td>
                        @foreach ( $alluser->roles as $role )
                            {{$role->name}}
                        @endforeach
                        
                        
                    </td>
                    <td>
                        @include('backend.admin.utilisateur.partials.edit')
                    </td>
                    <td>
    
                        <form action="{{ route('backend.destroyuser', $alluser->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" btn btn-danger text-white " onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                    
                </tr>                       
                    
                @endif
                    
                @endforeach
    
            </tbody>
        </table>
    </x-app-layout>
    