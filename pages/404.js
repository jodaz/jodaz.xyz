import Head from 'next/head'
import utilStyles from '../styles/utils.module.css'
import Layout from '../components/layout'

export default function Custom404() {
  return (
    <Layout>
      <Head>
        <title>Page not found!</title>
      </Head>

      <section>
        <h1>404 - Page not found!</h1>
      </section>
    </Layout>
  )
}
