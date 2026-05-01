# customerio-php

> **Archived: this repository is no longer maintained.**

This repo contained two PHP example scripts written in 2013. It was never an official Customer.io SDK or supported client library. The code targets a PHP API that has been deprecated for over a decade (`ereg` was removed in PHP 7) and has not been touched since.

## What to use instead

For PHP integrations with Customer.io today, call the REST API directly using the HTTP client of your choice (Guzzle, Symfony HttpClient, the `curl` extension, etc.).

- API reference: https://customer.io/docs/api/
- Track API guide: https://customer.io/docs/journeys/track-api/

If you need help integrating PHP, contact your Customer.io account team or reach out to support.

## Officially supported client libraries

Customer.io maintains client libraries for these languages:

- **Node.js**: https://github.com/customerio/customerio-node
- **Python**: https://github.com/customerio/customerio-python
- **Ruby**: https://github.com/customerio/customerio-ruby
- **Go**: https://github.com/customerio/go-customerio

Mobile SDKs (iOS, Android, React Native, Flutter, Expo) are listed at https://customer.io/docs/sdk/.

## Why the change

The two example scripts in this repo predated our supported SDK lineup and never functioned as a real client library. Leaving the repo public on the org without context was misleading: anyone landing here looking for a PHP SDK got 13-year-old sample code. Archiving and redirecting is cleaner than maintaining a deprecation banner that nobody would update.
