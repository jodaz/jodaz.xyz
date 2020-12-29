import React from 'react';

export default function Copyright() {
  return (
    <div>
      <p>
        Made by
        <a color="inherit" href="https://jodaz.xyz">
          Jesus Ordosgoitty
        </a>{' '}
        {'Copyright © '}
        {new Date().getFullYear()}
        {'.'}
      </p>
    </div>
  );
}
