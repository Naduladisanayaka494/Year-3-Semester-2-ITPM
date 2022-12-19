const db = require("../models");
const { hashSync, genSaltSync, compareSync } = require("bcrypt");
const Users = db.Users;
const { sign } = require("jsonwebtoken");

const Op = db.Op;

exports.create = (req, res) => {
  const body = req.body;
  const salt = genSaltSync(4);
  body.password = hashSync(body.password,salt);
  if (!req.body.email) {
      res.status(400).send({
        message: "Email can not be empty!"
      });
      return;
    }
  
    const user = {
        firstname: body.firstname,
        lastname: body.lastname,
        gender: body.gender,
        email: body.email,
        number: body.number,
        password: body.password,
        username: body.username,
        storeId: body.store
    };
  
    Users.create(user)
      .then(data => {
        res.send(data);
      })
      .catch(err => {
        res.status(500).send({
          message:
            err.message || "Some error occurred while creating the Tutorial."
        });
      });
  };

exports.login = (req, res) => {
    const body = req.body;
    if (!body.username) {
        res.status(400).send({
          message: "username can not be empty!"
        });
        return;
      }
      Users.findOne({where:{username: body.username}}).then((results) => {
        
        const result = compareSync(body.password, results.dataValues.password);
        if(result){
          results.password = undefined;
          const jsontoken = sign({ result: results }, process.env.JWT_KEY, {
            expiresIn: "2h"
          });
          return res.json({
            message: "login successfully",
            token: jsontoken
          });
        }else{
          return res.status(401).json({
            message: "Invalid email or password"
          });
        }
      }).catch((err) => {
        console.log(err);
      });
     
    };
exports.subcreate = (req, res) => {
      const body = req.body;
      const logedUser = req.decoded.result;
      const salt = genSaltSync(4);
      body.password = hashSync(body.password,salt);
      if (!req.body.email) {
          res.status(400).send({
            message: "Email can not be empty!"
          });
          return;
        }else if (!req.body.username) {
          res.status(400).send({
            message: "username can not be empty!"
          });
          return;
        }
      
        const user = {
            firstname: body.firstname,
            lastname: body.lastname,
            gender: body.gender,
            email: body.email,
            number: body.number,
            password: body.password,
            username: body.username,
            branchId: body.branch,
            storeId: logedUser.storeId
        };
      
        Users.create(user)
          .then(data => {
            res.send(data);
          })
          .catch(err => {
            res.status(500).send({
              message:
                err.message || "Some error occurred while creating the user."
            });
          });
      };