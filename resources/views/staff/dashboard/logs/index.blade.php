@extends('templates.master')
@section('title', 'Test')
@section('content')
  @extends('templates.dashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <span>Showing all your recent login attempts</span>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">Login History</span></p>
    </div>
    <div class="main-body">
      <table class="rwd-table " cellspacing="0">
        <tbody class="table--group">
        <tr class="table--headers">
          <th>Student ID</th>
          <th>Date</th>
          <th>Time</th>
          <th>IP Address</th>
        </tr>
          @foreach($logs as $log)
              <tr class="table--item">
                <td data-th="Student ID">{{$log->student_id}}</td>
                <td data-th="Date"><?php echo date('d-m-y', strtotime($log->date));?></td>
                <td data-th="Time"><?php echo date('G:i', strtotime($log->date));?></td>
                <td data-th="IP Address">{{$log->ip_address}}</td>
              </tr>
          @endforeach
        </tbody>
    </table>
    </div>
  @endsection
@endsection
