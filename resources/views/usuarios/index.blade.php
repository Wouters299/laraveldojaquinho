<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">password</th>

      </tr>
    </thead>



@foreach ( $users as $user )


    <tr>

        <td>  {{($user->name)}} </td>
        <td>  {{$user->password}}  </td>

    </tr>

    @endforeach
</table>
