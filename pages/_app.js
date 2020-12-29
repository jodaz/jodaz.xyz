import React from 'react'
import '../styles/global.css'
import "tailwindcss/tailwind.css"
import Head from 'next/head'
// Components
import Copyright from '../components/Copyright'

export default function App({ Component, pageProps }) {
  return (
    <React.Fragment>
      <Head>
        <title>Software Developer | Jodaz</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
      </Head>
      <Component {...pageProps} />

      <Copyright />
    </React.Fragment>
  );
}
