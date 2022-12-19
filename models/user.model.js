module.exports = (sequelize, Sequelize) => {
    const Users = sequelize.define("users", {
        firstname: {
        type: Sequelize.STRING
      },
      lastname: {
        type: Sequelize.STRING
      },
      gender: {
        type: Sequelize.STRING(10)
      },
      email: {
        type: Sequelize.STRING,
        unique: true
      },
      number: {
        type: Sequelize.INTEGER
      },
      password: {
        type: Sequelize.STRING
      },
      username: {
        type: Sequelize.STRING,
        unique: true
      },
      createdAt: {
        type: Sequelize.DATE,
        allowNull: false,
        defaultValue: Sequelize.literal('CURRENT_TIMESTAMP'),
      },
      updatedAt:{
        type: Sequelize.DATE,
        allowNull: false,
        defaultValue: Sequelize.literal('CURRENT_TIMESTAMP'),
      }
    });
  
    return Users;
  };