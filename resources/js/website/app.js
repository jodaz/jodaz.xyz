const button = document.getElementById('button');
const menu = document.getElementById('menu');
const navbar = document.getElementById('header');

window.onscroll = function() {
  "use strict";
  if (document.documentElement.scrollTop >= window.innerHeight * 0.75  ||
      document.body.scrollTop >= window.innerHeight * 0.75 ) {
    navbar.classList.add('header--scroll');
  } else {
    navbar.classList.remove('header--scroll');
  }
}

button.addEventListener('click', function() {
  button.classList.toggle('cross');
  menu.classList.toggle('menu--active');
});

const GET_USER_ARTICLES = `
  query GetUserArticles($page: Int!) {
    user(username: "jodaz") {
      publication {
        posts(page: $page) {
          title
          brief
          slug
          dateAdded
        }
      }
    }
  }
`;

async function gql(query, variables={}) {
  const data = await fetch('https://api.hashnode.com/', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({
      query,
      variables
    })
  });

  return data.json();
}

gql(GET_USER_ARTICLES, { page: 0 })
  .then(res => {
    const articles = res.data.user.publication.posts;
    const rootContainer = document.getElementById('articles');
    const articlesTag = document.getElementById('article-title');
    const blogButton = document.getElementById('read-more');
    const articlesLoader = document.getElementById('writings-loader');

    articles.slice(0, 2).reverse().forEach(article => {
      // Container
      let container = document.createElement('div');
      container.className = 'writings-post';
      // Title
      let link = document.createElement('a');
      let title = document.createElement('h3');
      title.innerText = article.title;
      link.href = `https://blog.jodaz.xyz/${article.slug}`;
      link.className = 'post-link';
      link.target = '_blank';

      link.appendChild(title); // Append title to link
      // Brief
      let brief = document.createElement('p');
      brief.innerText = article.brief;
      brief.className = 'post-summary';

      container.appendChild(link);
      container.appendChild(brief);

      rootContainer.appendChild(container);
    });

    rootContainer.className = 'flex container';
    blogButton.className = "flex row justify--center";
    articlesTag.className = 'row'
    articlesLoader.className = 'hide';
  });
