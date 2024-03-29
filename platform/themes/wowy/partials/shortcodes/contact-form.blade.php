<section class="mt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10" style="width: 100%">
                <div class="contact-from-area  padding-20-row-col wow tmFadeInUp animated" style="visibility: visible;">
                    <h3 class="mb-10 text-left" style="font-size:38px">{{ __('Schreiben Sie uns!') }}</h3>
                    {{-- <p class="text-muted mb-30 text-center font-sm">{{ __('Contact Us For Any Questions') }}</p> --}}
                    {!! Form::open(['route' => 'public.send.contact', 'class' => 'contact-form-style text-center contact-form', 'method' => 'POST']) !!}
                        {!! apply_filters('pre_contact_form', null) !!}
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="input-style mb-20" style="border:0.5px solid #d9e0e9; border-radius:10px" >
                                    <input name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" type="text" >
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-6">
                               <span class="wpcf7-form-control-wrap selects">
                                <select name="selects" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                    <option value="Unverbindliche Beratung">Unternehmen</option>
                                </select>
                               </span>
                            </div> -->
                            <div class="col-lg-6 col-md-6" >
                                <div class="input-style mb-20" style="border:0.5px solid #d9e0e9; border-radius:10px" >
                                    <input type="Unternehmen" name="Unternehmen" value="{{ old('Unternehmen') }}" placeholder="{{ __('Unternehmen') }}">
                                </div>
                            </div>
                             
                            <div class="col-lg-6 col-md-6" >
                                <div class="input-style mb-20" style="border:0.5px solid #d9e0e9; border-radius:10px" >
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="input-style mb-20" style="border:0.5px solid #d9e0e9; border-radius:10px" >
                                    <input name="phone" value="{{ old('phone') }}" placeholder="{{ __('Telefon') }}" type="tel">
                                </div>
                            </div>
                            
                           
                            {{-- <div class="col-lg-12 col-md-12">
                                <div class="input-style mb-20">
                                    <input name="subject" value="{{ old('subject') }}" placeholder="{{ __('Subject') }}" type="text">
                                </div>
                            </div> --}}
                            <div class="col-lg-12 col-md-12">
                                <div class="textarea-style" style="border:0.5px solid #d9e0e9; border-radius:10px" >
                                    <textarea name="content" placeholder="{{ __('Message') }}">{{ old('content') }}</textarea>
                                </div>

                                @if (is_plugin_active('captcha'))
                                    @if (setting('enable_captcha'))
                                        <div class="col-md-12">
                                            {!! Captcha::display() !!}
                                        </div>
                                    @endif

                                    @if (setting('enable_math_captcha_for_contact_form', 0))
                                        <div class="col-md-12 text-left">
                                            <label for="math-group">{{ app('math-captcha')->label() }}</label>
                                            {!! app('math-captcha')->input(['class' => 'form-control', 'id' => 'math-group']) !!}
                                        </div>
                                    @endif
                                @endif

                                {!! apply_filters('after_contact_form', null) !!}
                                <button class="submit submit-auto-width mt-30" style="float:left; background-color:#12a05c"  type="submit">{{ __('Senden') }}</button>
                            </div>
                        </div>
                        <div class="form-group text-left">
                            <div class="contact-message contact-success-message mt-30" style="display: none"></div>
                            <div class="contact-message contact-error-message mt-30" style="display: none"></div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
