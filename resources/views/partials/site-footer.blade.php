<footer class="site-footer" id="contact">

    <div class="container footer-grid">

        <div>
            <div class="footer-brand">
                {{ config('property.name') }}
            </div>

            <p>
                Premium commercial space for brands and businesses
                looking to establish a distinctive presence.
            </p>
        </div>


        <div>
            <span class="footer-label">Location</span>

            <p>
                {{ config('property.location') }}
            </p>

            <p>
                {{ config('property.direction') }}
            </p>
        </div>


        <div>
            <span class="footer-label">Enquiries</span>

            <a href="tel:{{ config('property.phone') }}">
                {{ config('property.phone') }}
            </a>

            <a href="mailto:{{ config('property.email') }}">
                {{ config('property.email') }}
            </a>
        </div>

    </div>


    <div class="footer-bottom">

        <div class="container">

            <span>
                © {{ date('Y') }} {{ config('property.name') }}
            </span>

            <span>
                Commercial Space • Kerala
            </span>

        </div>

    </div>

</footer>