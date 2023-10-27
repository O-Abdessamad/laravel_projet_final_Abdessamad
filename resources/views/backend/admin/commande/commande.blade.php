<x-app-layout>


    <table class="table container mt-10 ">
        <thead>




            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Detail</th>
            </tr>

                @foreach ($users as $user)

                    @foreach ($paniers as $panier)

                    @if ($panier->id_user=== $user->id)

                    <tr>
                        <td>#</td>
                        <td>{{$user->name}} </td>
                        <td>{{$user->email}} </td>
                        <td>{{$user->created_at}} </td>
                        <td> modaal </td>

                    </tr>
                        
                    @endif

                    @endforeach

                @endforeach

        </thead>



        <tbody>

            <tr>

            </tr>


        </tbody>

    </table>
</x-app-layout>
