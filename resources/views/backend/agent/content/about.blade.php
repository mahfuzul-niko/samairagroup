<x-app>
    <x-slot name="title">About us</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Our Mission
                </div>
                <form action="{{ route('agent.system.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" class="form-control" name="key" value="system_about_us_mission">

                    <div class="mb-3">
                        <label for="">Our Mission</label>
                        <textarea name="value" class="form-control" rows="5" id="">{{ system_key('system_about_us_mission') }}</textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Our Vision
                </div>
                <form action="{{ route('agent.system.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" class="form-control" name="key" value="system_about_us_vision">

                    <div class="mb-3">
                        <label for="">Our Vision</label>
                        <textarea name="value" class="form-control" rows="5" id="">{{ system_key('system_about_us_vision') }}</textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
</x-app>
