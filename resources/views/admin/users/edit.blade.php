@extends('admin.layouts.master')


@section('content')


    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form-center">Event Registration</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">

                        <div class="card-text">
                            <p>This example shows a way to center your form in the card. Here we have used <code>col-md-6 offset-md-3</code> classes to center the form in a full width card. User can always change those classes according to width and offset requirements. This example also uses form action buttons in the center bottom position of the card.</p>
                        </div>

                        <form class="form">
                            <div class="row">
                                <div class="col-md-6">

                                    <form class="form">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="icon-head"></i> مشخصات شخصی</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">نام :</label>
                                                        <input type="text" id="projectinput1" class="form-control" placeholder="نام" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput2">نام خانوادگی :</label>
                                                        <input type="text" id="projectinput2" class="form-control" placeholder="نام خانوادگی" name="lname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput3">پست الکترونیک :</label>
                                                        <input type="text" id="projectinput3" class="form-control" placeholder="پست الکترونیک" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput4">شماره تماس :</label>
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="شماره تماس" name="phone">
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="icon-clipboard4"></i> مشخصات علمی</h4>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput5">تحصیلات</label>
                                                        <select id="projectinput5" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">Interested in</option>
                                                            <option value="design">design</option>
                                                            <option value="development">development</option>
                                                            <option value="illustration">illustration</option>
                                                            <option value="branding">branding</option>
                                                            <option value="video">video</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput6">رتبه علمی</label>
                                                        <select id="projectinput6" name="budget" class="form-control">
                                                            <option value="0" selected="" disabled="">Budget</option>
                                                            <option value="less than 5000$">less than 5000$</option>
                                                            <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                            <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                            <option value="more than 20000$">more than 20000$</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="companyName">Company</label>
                                                <input type="text" id="companyName" class="form-control" placeholder="Company Name" name="company">
                                            </div>


                                            <div class="form-group">
                                                <label>Select File</label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file">
                                                    <span class="file-custom"></span>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label for="projectinput8">About Project</label>
                                                <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                            </div>
                                        </div>

                                    </form>


                                </div>
                                <div class="col-md-6">

                                    <form class="form">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="icon-head"></i> مشخصات شخصی</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">نام :</label>
                                                        <input type="text" id="projectinput1" class="form-control" placeholder="نام" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput2">نام خانوادگی :</label>
                                                        <input type="text" id="projectinput2" class="form-control" placeholder="نام خانوادگی" name="lname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput3">پست الکترونیک :</label>
                                                        <input type="text" id="projectinput3" class="form-control" placeholder="پست الکترونیک" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput4">شماره تماس :</label>
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="شماره تماس" name="phone">
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="icon-clipboard4"></i> مشخصات علمی</h4>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput5">تحصیلات</label>
                                                        <select id="projectinput5" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">Interested in</option>
                                                            <option value="design">design</option>
                                                            <option value="development">development</option>
                                                            <option value="illustration">illustration</option>
                                                            <option value="branding">branding</option>
                                                            <option value="video">video</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput6">رتبه علمی</label>
                                                        <select id="projectinput6" name="budget" class="form-control">
                                                            <option value="0" selected="" disabled="">Budget</option>
                                                            <option value="less than 5000$">less than 5000$</option>
                                                            <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                            <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                            <option value="more than 20000$">more than 20000$</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="companyName">Company</label>
                                                <input type="text" id="companyName" class="form-control" placeholder="Company Name" name="company">
                                            </div>


                                            <div class="form-group">
                                                <label>Select File</label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file">
                                                    <span class="file-custom"></span>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label for="projectinput8">About Project</label>
                                                <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                            </div>
                                        </div>

                                    </form>


                                </div>
                                <div class="form-actions center">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="icon-cross2"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="icon-check2"></i> Save
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection