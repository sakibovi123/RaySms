DATAA
{{--{{ $campaigns["transactionId"] }}--}}
{{--@foreach($campaigns as $data)--}}
    @foreach($campaigns["campaign"]["affiliateNumbers"] as $d)
        {{ $d["phoneNumber"] }}
    @endforeach
{{--@endforeach--}}
