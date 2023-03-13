<div class="container-fluid my-5">
    <div class="container">
        <div class="reservation position-relative overlay-top overlay-bottom">
            <div class="row align-items-center">
                <div class="col-lg-6 my-5 my-lg-0">
                    <div class="p-5">
                        <div class="mb-4">
                            <h1 class="display-3 text-primary">30% OFF</h1>
                            <h1 class="text-white">For Online Reservation</h1>
                        </div>
                        <p class="text-white">Lorem justo clita erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                            ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea</p>
                        <ul class="list-inline text-white m-0">
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                        <h1 class="text-white mb-4 mt-5">Book Your Table</h1>
                        <form action="{{route('reservationlayout.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control bg-transparent border-primary p-4"  placeholder="Name"
                                       required name="name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control bg-transparent border-primary p-4"  placeholder="Email"
                                       required name="email">
                            </div>
                            <div class="form-group">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" name="date" class="form-control bg-transparent border-primary p-4 datetimepicker-input"  placeholder="Date" data-target="#date" data-toggle="datetimepicker" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" name="time" class="form-control bg-transparent border-primary p-4 datetimepicker-input"  placeholder="Time" data-target="#time" data-toggle="datetimepicker" required="required"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="person" class="custom-select bg-transparent border-primary px-4" style="height: 49px;">
                                    <option value="person_1" selected >Person 1</option>
                                    <option value="person_2" >Person 2</option>
                                    <option value="person_3" >Person 3</option>
                                    <option value="person_4" >Person 4</option>
                                </select>
                            </div>
                            <div>
                                <a href="{{route('reservationlayout.index')}}"><button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Book Now</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
