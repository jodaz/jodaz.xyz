const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const helmet = require('helmet');
const passport = require('passport');
const config = require('config');
const path = require('path');
const app = express();

// Setting up
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
app.use(helmet());
app.use(passport.initialize());

/**
mongoose
  .connect(`${MONGO_URI}`, OPTIONS)
  .then(() => console.log(`MongoDB connected to ${MONGO_URI}`))
  .catch(error => console.log(error));

// Routing
require('./routes')(app);

if (APP_ENV = 'production') {
  app.use(express.static('client/build'));
  app.get('*', (req, res) => {
    res.sendFile(path.resolve(__dirname, 'client', 'build', 'html'));
  });
} 
*/

app.listen(config.get('app.port'), () => {
  console.log(`Listening on http://127.0.0.1:${config.get('app.port')}`);
});
