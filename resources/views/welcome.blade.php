@extends('layouts.site')

@section('title', config('property.name') . ' | Premium Commercial Space')

@section('content')


{{-- =========================================================
     HERO
========================================================= --}}

<section class="hero">

    <div class="hero-image"></div>

    <div class="hero-overlay"></div>

    <div class="container hero-content">

        <span class="eyebrow">
            PREMIUM COMMERCIAL SPACE
        </span>

        <h1>
            The right space
            <br>
            for your next business.
        </h1>

        <p>
            A distinctive commercial destination designed for
            brands, showrooms and businesses that deserve to stand out.
        </p>

        <div class="hero-actions">

            <a href="#enquiry" class="button button-primary">
                Enquire for Leasing
            </a>

            <a href="#property" class="button button-outline">
                Explore Property
            </a>

        </div>

        <div class="hero-location">

            <span>●</span>

            {{ config('property.location') }}

        </div>

    </div>

</section>



{{-- =========================================================
     INTRO
========================================================= --}}

<section class="property-overview" id="property">

    <div class="container">

        <div class="property-overview-grid">

            {{-- Visual --}}
            <div class="property-visual">

                <div class="property-visual-inner">

                    <span class="visual-label">
                        ARCHITECTURAL PREVIEW
                    </span>

                    <div class="visual-center">
                        <span class="visual-small">
                            PONNAANA
                        </span>

                        <strong>
                            HEARTLAND
                        </strong>

                        <span class="visual-line"></span>

                        <span class="visual-caption">
                            COMMERCIAL OPPORTUNITY
                        </span>
                    </div>

                    <span class="visual-bottom">
                        GROUND FLOOR · G+1 POTENTIAL
                    </span>

                </div>

            </div>


            {{-- Content --}}
            <div class="property-overview-content">

                <span class="section-label">
                    THE PROPERTY
                </span>

                <h2>
                    A space designed<br>
                    for the right business.
                </h2>

                <p class="property-lead">
                    {{ config('property.name') }} presents a
                    premium commercial opportunity for businesses
                    looking for a well-positioned physical space
                    with room for future growth.
                </p>

                <p>
                    The property can be considered for selected
                    retail, showroom, lifestyle, healthcare,
                    food & beverage and other customer-facing
                    business concepts.
                </p>


                <div class="property-facts">

                    <div class="property-fact">
                        <span>BUILT-UP AREA</span>
                        <strong>
                            {{ config('property.built_up_area') }}
                        </strong>
                    </div>

                    <div class="property-fact">
                        <span>CARPET AREA*</span>
                        <strong>
                            {{ config('property.carpet_area') }}
                        </strong>
                    </div>

                    <div class="property-fact">
                        <span>ROAD</span>
                        <strong>
                            {{ config('property.road') }}
                        </strong>
                    </div>

                    <div class="property-fact">
                        <span>DEVELOPMENT</span>
                        <strong>
                            G+1
                        </strong>
                    </div>

                </div>

                <p class="property-note">
                    * Certain property specifications are currently
                    indicative and will be confirmed before final
                    leasing discussions.
                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     PROPERTY NUMBERS
========================================================= --}}

<section class="stats-section">

    <div class="container">

        <div class="stats-header">
            <span class="section-label">AT A GLANCE</span>

            <p>
                Key property highlights for businesses
                evaluating the opportunity.
            </p>
        </div>


        <div class="stats-grid">

            <div class="stat">
                <span class="stat-number">
                    {{ config('property.built_up_area') }}
                </span>

                <span class="stat-label">
                    Built-up Area
                </span>
            </div>


            <div class="stat">
                <span class="stat-number">
                    {{ config('property.carpet_area') }}
                </span>

                <span class="stat-label">
                    Carpet Area*
                </span>
            </div>


            <div class="stat">
                <span class="stat-number">
                    G+1
                </span>

                <span class="stat-label">
                    Development Potential
                </span>
            </div>


            <div class="stat">
                <span class="stat-number">
                    {{ config('property.parking') }}
                </span>

                <span class="stat-label">
                    Parking Provision*
                </span>
            </div>

        </div>


        <p class="stats-note">
            * Indicative specifications subject to final confirmation.
        </p>

    </div>

</section>


{{-- =========================================================
     WHY THIS PROPERTY
========================================================= --}}

<section class="features-section">

    <div class="container">

        <div class="features-intro">

            <div>
                <span class="section-label">
                    WHY PONNAANA HEARTLAND
                </span>

                <h2>
                    More than a space.<br>
                    A place for your business.
                </h2>
            </div>

            <div class="features-intro-copy">
                <p>
                    A commercial space should do more than
                    accommodate your business. It should support
                    how customers see, access and experience your brand.
                </p>
            </div>

        </div>


        <div class="features-grid">

            <article class="feature-card">

                <div class="feature-top">
                    <span class="feature-number">01</span>
                    <span class="feature-symbol">+</span>
                </div>

                <div>
                    <h3>
                        Visibility
                    </h3>

                    <p>
                        A road-facing commercial setting designed
                        to give your business a clear physical presence.
                    </p>
                </div>

            </article>


            <article class="feature-card">

                <div class="feature-top">
                    <span class="feature-number">02</span>
                    <span class="feature-symbol">+</span>
                </div>

                <div>
                    <h3>
                        Brand-Ready
                    </h3>

                    <p>
                        A flexible space that can be adapted to suit
                        the identity and operational needs of your business.
                    </p>
                </div>

            </article>


            <article class="feature-card">

                <div class="feature-top">
                    <span class="feature-number">03</span>
                    <span class="feature-symbol">+</span>
                </div>

                <div>
                    <h3>
                        Flexible
                    </h3>

                    <p>
                        Suitable for selected retail, showroom,
                        lifestyle, healthcare and customer-facing concepts.
                    </p>
                </div>

            </article>


            <article class="feature-card">

                <div class="feature-top">
                    <span class="feature-number">04</span>
                    <span class="feature-symbol">+</span>
                </div>

                <div>
                    <h3>
                        Future-Ready
                    </h3>

                    <p>
                        Additional first-floor space can be developed
                        for a suitable business based on its requirements.
                    </p>
                </div>

            </article>

        </div>

    </div>

</section>

{{-- =========================================================
     BUSINESS TYPES
========================================================= --}}

<section class="business-section" id="businesses">

    <div class="container">

        <div class="section-heading centered">

            <span class="section-label">
                IDEAL FOR
            </span>

            <h2>
                Designed around
                <br>
                the right businesses.
            </h2>

            <p>
                The property can be considered for a range of
                established brands, businesses and franchise operators.
            </p>

        </div>


        <div class="business-grid">

            <div class="business-item">
                <span>01</span>
                <strong>Retail Showrooms</strong>
            </div>

            <div class="business-item">
                <span>02</span>
                <strong>Fashion & Lifestyle</strong>
            </div>

            <div class="business-item">
                <span>03</span>
                <strong>Food & Beverage</strong>
            </div>

            <div class="business-item">
                <span>04</span>
                <strong>QSR & Café Concepts</strong>
            </div>

            <div class="business-item">
                <span>05</span>
                <strong>Healthcare</strong>
            </div>

            <div class="business-item">
                <span>06</span>
                <strong>Electronics & Appliances</strong>
            </div>

            <div class="business-item">
                <span>07</span>
                <strong>Beauty & Wellness</strong>
            </div>

            <div class="business-item">
                <span>08</span>
                <strong>Other Suitable Businesses</strong>
            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     FIRST FLOOR OPPORTUNITY
========================================================= --}}

<section class="opportunity-section" id="opportunity">

    <div class="container opportunity-grid">

        <div class="opportunity-visual">

            <span>
                FUTURE DEVELOPMENT
            </span>

            <strong>
                G+1
            </strong>

        </div>


        <div class="opportunity-content">

            <span class="section-label">
                NEED MORE SPACE?
            </span>

            <h2>
                We can build
                <br>
                it for you.
            </h2>

            <p>
                If your business requires additional floor space,
                a first-floor commercial area can be developed
                based on your requirements.
            </p>

            <p>
                The indicative development period is approximately
                4–6 months, subject to final requirements, design,
                approvals and construction feasibility.
            </p>

            <a href="#enquiry" class="text-link">
                Discuss your requirements →
            </a>

        </div>

    </div>

</section>



{{-- =========================================================
     LOCATION
========================================================= --}}

<section class="location-section" id="location">

    <div class="container location-grid">

        <div>

            <span class="section-label">
                LOCATION
            </span>

            <h2>
                Positioned for
                <br>
                accessibility.
            </h2>

            <p>
                {{ config('property.location') }}
            </p>

            <p>
                {{ config('property.direction') }}
            </p>

        </div>


        <div class="location-card">

            <span>
                LOCATION
            </span>

            <strong>
                {{ config('property.road') }}
            </strong>

            <small>
                Exact map positioning will be added
                after location details are confirmed.
            </small>

        </div>

    </div>

</section>



{{-- =========================================================
     ENQUIRY CTA
========================================================= --}}

<section class="enquiry-section" id="enquiry">

    <div class="container enquiry-inner">

        <span class="section-label">
            LEASING OPPORTUNITY
        </span>

        <h2>
            Is this the right space
            <br>
            for your business?
        </h2>

        <p>
            Tell us about your business and the space you require.
            We would be happy to discuss the property and arrange
            a site visit.
        </p>

        <a
            href="mailto:{{ config('property.email') }}"
            class="button button-primary"
        >
            Start an Enquiry
        </a>

    </div>

</section>


@endsection