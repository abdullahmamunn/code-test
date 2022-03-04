
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Report</h2>
        <div class="d-flex justify-content-end mb-4">
        </div>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th>Serial</th>
                    <th>Url</th>
                    <th>Shortening Url</th>
                    <th>Created At</th>
                    <th>Most Visited</th>
                </tr>
            </thead>
            <tbody>

                @foreach($data as $url)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $url['url'] }}</td>
                    <td>{{ url('redirect',$url['short_url']) }}</td>
                    {{-- <td>{{ $url['created_at']->diffForHumans() }}</td> --}}
                    <td>{{ \Carbon\Carbon::parse($url['created_at'])->diffForHumans() }}</td>
                    <td>{{ $url['visitors_count'] }}</td>
                </tr>
               @endforeach

            </tbody>
        </table>
    </div>
</body>
</html>
