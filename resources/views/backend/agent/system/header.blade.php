<x-app>
    <x-slot name="title">System Edit Header</x-slot>
    <section class="social">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Soccial Section
                </div>
                <form action="{{ route('agent.system.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="key" required>
                                <option selected>Select social option</option>
                                <option value="system_facebook">Facebook</option>
                                <option value="system_twitter">Twitter</option>
                                <option value="system_pinterest">Pinterest</option>
                                <option value="system_instagram">Instagram</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="url" class="form-control" id="inputEmail4" placeholder="Enter social url"
                                name="value" required value="https://">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3">Submit</button>
                </form>
                <div class="card-title">
                    Soccial List
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">Facebook:</th>
                            <td>{{ system_key('system_facebook') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Instagram:</th>
                            <td>{{ system_key('system_instagram') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Twitter:</th>
                            <td>{{ system_key('system_twitter') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Pinterest:</th>
                            <td>{{ system_key('system_pinterest') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Contact Section
                </div>
                <form action="{{ route('agent.system.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="key" required>
                                <option selected>Select contact option</option>
                                <option value="system_email">Email</option>
                                <option value="system_phone">Phone</option>
                                <option value="system_address_top">Address Top</option>
                                <option value="system_address_bottom">Address Bottom</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Enter contact info"
                                name="value" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3">Submit</button>
                </form>
                <div class="card-title">
                    Contact List</div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">Email:</th>
                            <td>{{ system_key('system_email') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Phone:</th>
                            <td>{{ system_key('system_phone') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Address Top:</th>
                            <td>{{ system_key('system_address_top') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Address Bottom:</th>
                            <td>{{ system_key('system_address_bottom') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</x-app>
