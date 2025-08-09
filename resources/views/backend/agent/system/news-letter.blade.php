<x-app>
    <x-slot name="title"> to News Letter</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    News letter or Samaira Group
                </div>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                    </tr>
                    @foreach ($groups as $key => $item)
                        <tr>
                            <td>
                                {{ $key + 1 }}
                            </td>
                            <td>
                                {{ $item->email }}
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $groups->links() }}
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    News letter or Samaira Jobs
                </div>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                    </tr>
                    @foreach ($jobs as $key => $item)
                        <tr>
                            <td>
                                {{ $key + 1 }}
                            </td>
                            <td>
                                {{ $item->email }}
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $jobs->links() }}
            </div>
        </div>
    </section>
</x-app>
