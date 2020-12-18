import utilStyles from '../styles/utils.module.css'
import {
  SiTwitter,
  SiLinkedin,
  SiGithub
} from 'react-icons/si';

const links = [
  {
    href: "https://linkedin.com/in/jodaz",
    icon: <SiLinkedin />
  },
  {
    href: "https://github.com/jodaz",
    icon: <SiGithub />
  },
  {
    href: "https://twitter.com/jodaz_",
    icon: <SiTwitter />
  },
];

function Social() {
  return (
    <section className={`${utilStyles.social}`}>
      { links.map((link, index) => (
        <a href={link.href}
          className={`${utilStyles.social_anchor}`}
          target='_blank'
          key={index}
        >
          {link.icon}
        </a>
      ))
      }
    </section>
  )
}

export default Social;
