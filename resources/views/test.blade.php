



<!DOCTYPE HTML>
<html>
<head>

    <link rel = "stylesheet" href = "<?php echo asset('css/filter.css')?>">
    <!--We usually place the google maps API below jQuery-->

    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
   

    @foreach($apartment as $apt)

    <div id="gtco-team" class="gtco-section">
        <div class="gtco-container wow fadeInUp" data-wow-duration="2s">
            <div class="row">
               
                    <div class="item">
                        <img src="/img/{{ $apt->apt_image }}" alt="" class="img-responsive">
                        <div class="inside-text">
                            <h3>{{ $apt->BHK }}BHK {{ $apt->type_of_apartment }} at {{ $apt->locality }}</h3>
                            <div class="container diff">
                                <div class="row vdivide">
                                <table>
                                	<tr>
	                                    <th class = "pad">Price</th>
	                                    <th class = "pad">Sqft</th>
	                                    <th class = "pad">Possesion</th>
	                                    <th class = "pad">Posted By</th>
	                                </tr>
                  					<tr>
	                                    <td class = "pad">{{ $apt->price }}</td>
	                                    <td class = "pad">{{ $apt->carpet_area }}</td>
	                                    <td class = "pad">{{ $apt->year_of_construction }}</td>
	                                    <td class = "pad">{{ $apt->owner }}</td><br>
	                                </tr>
	                            </table>
                                    <a href="{{ route('apartment.details-view', $apt->apt_id) }}"><button class = "contact">View Details</button></a>
                                </div>
                               
                            </div>
                           
                        </div>
                    </div>
            </div>
        </div>
    </div>
     @endforeach

        <div class="text-center">
            {!! $apartment->render() !!}
        </div>

        <div class="google-map">
            <div id="map">

            </div>
        </div>

</body>
</html>


