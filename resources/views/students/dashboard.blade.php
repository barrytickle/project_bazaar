@extends('templates.master')
@section('title', 'Test')
@section('content')
  @extends('templates.dashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top">
      <div class="search--group">
        <span>Searching for:</span>
          <select>
            <option>BSc Hons, Web Design & Development</option>
            <option>BSc Hons, Games Development</option>
            <option>BSc Hons, Networking</option>
            <option>BSc Hons, General Computing</option>
          </select>
      </div>
      <div class="default-navigation">
        <p><span>56</span> Projects Proposed</p>
        <p><span>2</span> Staff members for pathway</p>
        <p>Year <span>2017</span></p>
      </div>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span>All projects</span></p>
    </div>
    <div class="main-body">
      <table class="rwd-table" cellspacing="0">
        <tr class="table--headers">
          <th>Project Name</th>
          <th>Author</th>
          <th>Authorized By</th>
          <th>Date</th>
          <th>View</th>
        </tr>
        <tr>
          <td data-th="Project Name">Liverpool Museum Game Project.</td>
          <td data-th="Author">22678832</td>
          <td data-th="Authorized By">David Walsh</td>
          <td data-th="Date">04/03/18</td>
          <td data-th="View"><a href="#" class="btn btn-outline">View Project</a></td>
        </tr>
    </table>
    </div>
  @endsection
@endsection
