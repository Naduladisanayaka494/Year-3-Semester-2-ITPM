module.exports = (sequelize, Sequelize) => {
    const Customer = sequelize.define("customers", {
      name: {
        type: Sequelize.STRING
      },
      address:{
        type: Sequelize.STRING
      },
      phone: {
        type: Sequelize.STRING,
        allowNull: false,
        validate: {
          notNull: { args: true, msg: "You must enter Phone Number" },
          len: { args: [10,10], msg: 'Phone Number is invalid' },
          isInt: { args: true, msg: "You must enter Phone Number" },
        }
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
  
    return Customer;
  };