import * as React from 'react';
import Head from 'next/head'

export default function Custom404() {
  return (
    <React.Fragment>
      <Head>
        <title>Page not found!</title>
      </Head>

      <section>
        <h1>404 - Page not found!</h1>
      </section>
    </React.Fragment>
  )
}
