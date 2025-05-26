<x-app>
    <x-slot name="title">Wecome Agent Request</x-slot>
    <section class="request">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Agent Requests</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Agent Name</th>
                                <th>Agent Number</th>
                                <th>Agent Email</th>
                                <th>Agent NID</th>
                                <th>Agent Resume</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $request)
                                <tr>
                                    <td>{{ $request->name }}</td>
                                    <td>{{ $request->number }}</td>
                                    <td>{{ $request->email }}</td>

                                    <td>
                                        @if ($request->nid)
                                            <a href="{{ Storage::url($request->nid) }}" target="_blank"
                                                class="btn btn-info"><i class="bi bi-file-earmark-arrow-down"></i></a>
                                        @else
                                            <a  class="btn btn-danger"><i class="bi bi-file-earmark-excel"></i></a>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($request->resume)
                                            <a href="{{ Storage::url($request->resume) }}" target="_blank"
                                                class="btn btn-info"><i class="bi bi-file-earmark-arrow-down"></i></a>
                                        @else
                                            <a  class="btn btn-danger"><i class="bi bi-file-earmark-excel"></i></a>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('agent.jphomes.request.mark', $request) }}"
                                            method="POST">
                                            @csrf
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="request{{ $request->id }}" name="mark" value="1"
                                                    {{ $request->mark == 1 ? 'checked' : '' }}
                                                    onchange="this.form.submit()">
                                                <label class="form-check-label"
                                                    for="request{{ $request->id }}">Approve</label>
                                            </div>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app>
