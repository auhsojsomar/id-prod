@extends('layouts.app')
@section('title', 'Employee')
@section('content')
  <div class="table">
    <table class="bg-white">
      <thead>
        <tr>
          <th>SBU</th>
          <th>Employee Number</th>
          <th>Lastname</th>
          <th>Firstname</th>
          <th>Middlename</th>
          <th>Nickname</th>
          <th>SSS Number</th>
          <th>Contact Person</th>
          <th>Contact Person Number</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($employees as $data)
          <tr>
            <td>{{ $data->sbu }}</td>
            <td>{{ $data->employee_id }}</td>
            <td>{{ $data->last_name }}</td>
            <td>{{ $data->first_name }}</td>
            <td>{{ $data->middle_name }}</td>
            <td>{{ $data->nick_name }}</td>
            <td>{{ $data->sss }}</td>
            <td>{{ $data->contact_person }}</td>
            <td>{{ $data->contact_person_number }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $employees->links() }}
  </div>
@endsection
